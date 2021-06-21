<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отель Атлантик</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/receipt.css') }}">
</head>

<body>
    <script>
        function CallPrint(strid) {
            var prtContent = document.getElementById(strid);
            var WinPrint = window.open('', '', 'left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
            WinPrint.document.write('');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.write('');
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
    </script>

    @include('nav', ['isBlack' => true])

    @include('breadcrumbs', ['paths' => ['/' => 'Главная', 'receipt' => 'Детали бронирования']])

    <main class="main">
        <div class="container">
            <div class="section">
                <h2 class="section__title">Детали бронирования</h2>
            </div>
            <div class="receipt">
                <div class="receipt__head">
                    <div class="receipt__number">
                        <h2>Подтверждение №&nbsp;</h2>
                        <h2>{{$reservation->id}}</h2>
                    </div>
                    <div class="receipt__print">
                        <a class="button button--primary" href="#">Скачать подтверждение</a>
                        <a class="button button--primary" onClick="javascript:CallPrint('print-content');">Распечатать</a>
                    </div>
                </div>

                <div class="receipt__summary">
                    <h3>1 номер</h3>
                    <p><b>Заезд:&nbsp;</b>{{$reservation->arrival_date}}</p>
                    <p><b>Выезд:&nbsp;</b>{{$reservation->departure_date}}</p>
                </div>

                <table class="receipt__table" id="print-content">
                    <tr>
                        <td>
                            <h3>Общая стоимость</h3>
                        </td>
                        <td class="receipt__td-right sum">
                            <h2>{{$reservation->price}} руб.</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Вид оплаты</h3>
                        </td>
                        <td class="receipt__td-right">
                            <h3>Оплата при заселении</h3>
                        </td>
                    </tr>
                    @if($reservation->transfer == 1)
                    <tr>
                        <td>
                            <h3>Трансфер</h3>
                        </td>
                        <td class="receipt__td-right transfer-sum">
                            <h3>2000 руб.</h3>
                        </td>
                    </tr>
                    @endif

                </table>
                <div class="receipt__cancel">
                    <a class="button button--primary" href="/">На Главную</a>
                    <a class="button button--primary" href="#">Отменить бронирование</a>
                </div>
            </div>
        </div>
    </main>

    @include('footer')
    @include('scrollup')

    <script src="{{ asset('js/receipt.js') }}"></script>
</body>

</html>