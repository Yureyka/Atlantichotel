<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отель Атлантик</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <header class="header">
        <div class="container header__container--top">
            <nav class="nav">
                <div class="nav__info">
                    <div class="nav__logo">
                        <a href="/">
                            <img class="" src="{{ asset('images/logo.svg') }}" alt="Astoria Logo">
                        </a>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link" href="#">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">ОТЕЛИ</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">ГАЛЕРЕЯ</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">КОНТАКТЫ</a>
                        </li>
                    </ul>
                </div>
                <div class="nav__tel">
                    <a class="nav__link" href="tel:89787777777">+7 (978) 777-77-77</a>
                </div>
            </nav>
            <div class="header__content">
                <h2 class="header__subtitle">Добро пожаловать</h2>
                <h1 class="header__title">ATLANTIC HOTEL</h1>
                <h2 class="header__subtitle header__subtitle--lines">Откройте для себя роскошь</h2>
            </div>

        </div>
        <div class="container header__container--bottom">
            <div class="header__booking">
                @include('booking')
            </div>
        </div>
    </header>

    <main>
        <section class="section about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__img">
                            <picture>
                                <source srcset="{{ asset('images/about/about.webp') }} 1x,
                                                {{ asset('images/about/about@2x.webp') }} 2x" type="image/webp">
                                <source srcset="{{ asset('images/about/about.jpg') }} 1x,
                                                {{ asset('images/about/about@2x.jpg') }} 2x">
                                <img src="{{ asset('images/about/about.jpg') }}" alt="Интерьер номера">
                            </picture>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="section__title">Добро пожаловать в Atlantic</h3>
                        <h4 class="section__subtitle">Уникальные отели</h4>
                        <p class="section__desc">
                            Атлантик &ndash; это уютные отели с просторными номерами отзывчивым персоналом и высоким качеством обслуживания.
                            Рядом с отелями
                            расположены сети магазинов, кафе и рестораны, супермаркеты,
                            торгово-развлекательный центры, все необходимое в шаговой
                            доступности.
                            Гостиница состоит из трех блоков и 36 номеров: одноместные,
                            двухместные, трехместные, семейные. Номера оборудованы всем
                            необходимым для работы и отдыха. В гостиницы расположен ресторан с
                            баром, где постояльцы могут позавтракать или просто расслабиться за
                            чашечкой кофе.
                        </p>
                        <h4 class="section__subtitle">Уникальный дизайн отелей</h4>
                        <p class="section__desc">
                            Дизайн каждого номера в гостинице продуман так, чтобы постояльцы
                            чувствовали себя как дома. Приятные пастельные тона преобладают в
                            интерьерах номеров для максимального комфорта расслабленности.
                            Каждый номер оборудован необходимой техникой: кондиционер,
                            холодильник, телевизор. Постояльцы отеля могут пользоваться
                            высокоскоростным 4-Й в любое время суток.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="advantages">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="advantages__icon">
                            <img src="{{ asset('images/icons/food.svg') }}" alt="">
                        </div>
                        <h4>БЕСПЛАТНЫЙ ЗАВТРАК</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="advantages__icon">
                            <img src="{{ asset('images/icons/service.svg') }}" alt="">
                        </div>
                        <h4>ОБСЛУЖИВАНИЕ НОМЕРОВ</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="advantages__icon">
                            <img src="{{ asset('images/icons/camera.svg') }}" alt="">
                        </div>
                        <h4>ОХРАНЯЕМАЯ ПАРКОВКА</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="advantages__icon">
                            <img src="{{ asset('images/icons/wifi.svg') }}" alt="">
                        </div>
                        <h4>БЕСПЛАТНЫЙ WI-FI</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>