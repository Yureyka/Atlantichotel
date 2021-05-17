<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отель Атлантик</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/apartments.css') }}">
</head>

<body>
    @include('nav', ['isBlack' => true])

    @include('breadcrumbs', ['paths' => ['/' => 'Главная', 'reservation' => 'Одноместный номер']])

    <main class="main">
        <div class="container">
            <div class="section">
                <h2 class="section__title">Апартаменты</h2>
            </div>
            <div class="apartments">
                <div class="row apartments__margin">
                    <div class="col-md-7">
                        <div class="apartments__img">
                            <div id="my-slider">
                                <div>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery5.webp') }} 1x,
                                        {{ asset('images/gallery/gallery5@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery5.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery5@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery5.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </div>
                            </div>

                            <ul id="customize-thumbnails" class="apartments__slider">
                                <li>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                                    </picture>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="apartments__info">
                            <div class="apartments__top">
                                <h3 class="apartments__title">Одноместный номер</h3>
                                <p class="apartments__desc">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, voluptatum!
                                </p>
                                <p class="apartments__desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat et fugit a rerum mollitia sit.
                                </p>
                                <p class="apartments__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint porro et aliquid in mollitia assumenda.
                                </p>
                            </div>
                            <div class="apartments__bottom">
                                <div class="apartments__sum">
                                    <h5 class="">Суточная цена</h5>
                                    &mdash;
                                    <h4 class="">100 000 грывень</h4>
                                </div>
                                <a href="#" class="button button--primary">Бронировать</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="apartments__facts">
                            <h3 class="apartments__title">Оснащение номера</h3>
                            <p class="apartments__desc">&mdash;Номер оснащен шикарной двуспальной кроватью</p>
                            <p class="apartments__desc">&mdash; Большой телевизор</p>
                            <p class="apartments__desc">&mdash; Письменный стол</p>
                            <p class="apartments__desc">&mdash; Холодильник</p>
                            <p class="apartments__desc">&mdash; Ванная комната</p>
                            <p class="apartments__desc">&mdash; Шкаф для одежды</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apartments__facts">
                            <h3 class="apartments__title">В стоимость номера включено:</h3>
                            <p class="apartments__desc">&mdash; Завтрак</p>
                            <p class="apartments__desc">&mdash; Гладильная комната</p>
                            <p class="apartments__desc">&mdash; Бесплатный Wi-fi</p>
                            <p class="apartments__desc">&mdash; Побудка к определенному времени</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('footer')

    <script>
        const slider = tns({
            container: '#my-slider',
            items: 1,
            navContainer: "#customize-thumbnails",
            navAsThumbnails: false,
            controls: false,
            swipeAngle: false,
            speed: 400
        });
    </script>
</body>

</html>