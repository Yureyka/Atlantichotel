<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/jsgrid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jsgrid-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-panel.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    @include('admin-aside')
    <div class="admin-panel">
        <h1 class="admin-panel__title">Поддержка</h1>
        <div class="admin-panel__content">
            <div class="admin-panel__table">
                <div id="jsGrid">

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jsgrid.min.js') }}"></script>
    <script src="{{ asset('js/feedbacks.js') }}"></script>
</body>

</html>