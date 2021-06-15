<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/jsgrid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jsgrid-theme.min.css') }}">
</head>

<body>
    <div class="admin-panel">
        <aside>
            <nav>
                <ul>
                    <li>
                        <img src="" alt="">
                        <h3>Бронь</h3>
                    </li>
                    <li>
                        <img src="" alt="">
                        <h3>Поселение</h3>
                    </li>
                    <li>
                        <img src="" alt="">
                        <h3>Клиенты</h3>
                    </li>
                    <li>
                        <img src="" alt="">
                        <h3>Поддержка</h3>
                    </li>
                    <li>
                        <img src="" alt="">
                        <h3>Отчеты</h3>
                    </li>
                </ul>
            </nav>
        </aside>

        <div>
            <div id="jsGrid">

            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jsgrid.min.js') }}"></script>
    <script src="{{ asset('js/reservations.js') }}"></script>
</body>

</html>