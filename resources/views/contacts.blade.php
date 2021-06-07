<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отель Атлантик</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
</head>

<body>
    @include('nav', ['isBlack' => true])

    @include('breadcrumbs', ['paths' => ['/' => 'Главная', 'contacts' => 'Контакты']])

    <main class="main">
        <div class="container">
            <div class="section">
                <h2 class="section__title">Контактная информация</h2>
            </div>
            <div class="contacts">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contacts__info">
                            <img src="{{ asset('images/phone-icon.svg') }}" alt="">
                            <a href="tel:89787777777">+7 (978) 777-77-77</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contacts__info">
                            <img src="{{ asset('images/mail-icon.svg') }}" alt="">
                            <a href="mail:atlantic@gmail.com">atlantic@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="contacts__map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A162006ce4f14d0b1e8eba4862f6c1d036103ba41fe38cce76036544481e453f4&amp;lang=ru_RU&amp;scroll=true"></script>
                    <div class="contacts__support">
                        <h3>Остались вопросы? Напишите нам</h3>
                        <form id="feedback-form" class="feedback">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="contacts__support-row">
                                <input id="name" type="text" placeholder="Имя">
                                <input id="email" type="email" placeholder="Email">
                            </div>
                            <textarea id="message" rows="3" placeholder="Ваше сообщение"></textarea>
                            <p class="feedback__response" id="response"></p>
                            <button id="feedback_btn" class="button button--primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('footer')
    @include('scrollup') 
    <script src="{{ asset('js/sendTicket.js') }}"></script>
</body>

</html>