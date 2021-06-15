<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlantic | Admin</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <main class="login">
        <div class="login__wrapper">
            <h2 class="login__title">ATLANTIC HOTEL</h2>
            <h4 class="login__subtitle">Administrator</h4>
            <form class="login__form" method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Вход</h3>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Логин" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button class="button button--primary" type="submit">Войти</button>
                
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </form>
        </div>
    </main>
</body>

</html>