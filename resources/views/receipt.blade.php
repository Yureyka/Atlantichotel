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
    @include('nav', ['isBlack' => true])

    @include('breadcrumbs', ['paths' => ['/' => 'Главная', 'reservation' => 'Галерея']])

    <main class="main">
        <div class="container">
            <div class="section">
                <h2 class="section__title">Детали бронирования</h2>
            </div>
            <div class="receipt">
                <div class="receipt__head">
                    <div class="receipt__number">
                        <h2>Чек №&nbsp;</h2>
                        <h2>39-3435-54</h2>
                    </div>
                    <div class="receipt__print">
                        <a class="button button--primary" href="#">Скачать подтверждение</a>
                        <a class="button button--primary" href="#">Распечатать</a>
                    </div>
                </div>

                <div class="receipt__summary">
                    <h3>2 номера</h3>
                    <p><b>Заезд:&nbsp;</b>29 декабря 2021, вт, 12:00</p>
                    <p><b>Выезд:&nbsp;</b>29 декабря 2021, вт, 12:00</p>
                </div>

                <table class="receipt__table">
                    <tr>
                        <td>
                            <h3>Общая стоимость</h3>
                        </td>
                        <td class="receipt__td-right">
                            <h2>2900 руб.</h2>
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
                    <tr>
                        <td>
                            <h3>Двуместный номер</h3>
                        </td>
                        <td class="receipt__td-right">
                            <h3>2900 руб.</h3>
                        </td>
                    </tr>
                </table>
                <div class="receipt__cancel">
                    <a class="button button--primary" href="#">Отменить бронирование</a>
                </div>
            </div>
        </div>
    </main>

    @include('footer')
</body>

</html>