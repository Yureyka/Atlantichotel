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
        @include('nav')
        <div class="container">
            <div class="header__content">
                <h2 class="header__subtitle">Добро пожаловать</h2>
                <h1 class="header__title">ATLANTIC HOTEL</h1>
                <h2 class="header__subtitle header__subtitle--lines">Откройте для себя роскошь</h2>
            </div>
        </div>
        <div class="header__booking">
            @include('booking')
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
                        <h2 class="section__title">Добро пожаловать в Atlantic</h2>
                        <h3 class="section__subtitle">Уникальные отели</h3>
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
                        <h3 class="section__subtitle">Уникальный дизайн отелей</h3>
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

        <section class="best-rooms section">
            <div class="container">
                <h2 class="section__title">Лучшие номера</h2>
                <div class="row best-rooms__main">
                    <div class="col-md-8">
                        <div class="best-rooms__img">
                            <img src="{{ asset('images/home/room1_1.jpg') }}" alt="Двухместный номер">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="section__subtitle">Комфортабельные номера</h3>
                        <p class="section__desc">
                            Гостиница Атлантик предлагает комфортные номера, тихую и уютную обстановку для каждого постояльца.
                            Номера оснащены всем необходимым: просторные комфортабельные кровати с ортопедическим матрасом, отдельная ванная комната,
                            рабочая область для продуктивной работы, телевизор, кондиционер, холодильник для хранения еды или напитков и шкаф для одежды.
                        </p>
                        <div class="best-rooms__price">
                            <div class="price">
                                <h6 class="price__title">Одноместный номер</h6>
                                <h5 class="price__cost">3200 руб/сутки</h5>
                                <a href="{{ route ('reservation') }}" class="button button--secondary">Смотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="room">
                            <div class="room__img">
                                <img src="{{ asset('images/home/room2_1.jpg') }}" alt="Двухместный номер">
                            </div>
                            <div>
                                <div class="room__info">
                                    <h3 class="room__title">Двухместный номер</h3>
                                    <p>Номер оснащен шикарной двуспальной кроватью. Прекрасное решение для отдыха в поездке. Телевизор, рабочая область (письменный стол), wi-fi.</p>
                                </div>
                                <div class="price price--tiny">
                                    <h6 class="price__title">От</h6>
                                    <h5 class="price__cost">5600 руб/сутки</h5>
                                    <a href="{{ route ('reservation') }}" class="button button--secondary">Смотреть</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="room">
                            <div class="room__img">
                                <img src="{{ asset('images/home/room3_1.jpg') }}" alt="Трехместный номер">
                            </div>
                            <div>
                                <div class="room__info">
                                    <h3 class="room__title">Трехместный номер</h3>
                                    <p>Номер оснащен шикарной двуспальной кроватью. Прекрасное решение для отдыха в поездке. Телевизор, рабочая область (письменный стол), wi-fi.</p>
                                </div>
                                <div class="price price--tiny">
                                    <h6 class="price__title">От</h6>
                                    <h5 class="price__cost">8000 руб/сутки</h5>
                                    <a href="{{ route ('reservation') }}" class="button button--secondary">Смотреть</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="gallery__items">
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery2.webp') }} 1x,
                                        {{ asset('images/gallery/gallery2@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery2.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery2@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery2.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery3.webp') }} 1x,
                                    {{ asset('images/gallery/gallery3@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery3.jpg') }} 1x,
                                    {{ asset('images/gallery/gallery3@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery3.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery4.webp') }} 1x,
                                        {{ asset('images/gallery/gallery4@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery4.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery4@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery4.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery5.webp') }} 1x,
                                    {{ asset('images/gallery/gallery5@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery5.jpg') }} 1x,
                                    {{ asset('images/gallery/gallery5@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery5.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery6.webp') }} 1x,
                                        {{ asset('images/gallery/gallery6@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery6.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery6@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery6.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery7.webp') }} 1x,
                                        {{ asset('images/gallery/gallery7@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery7.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery7@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery7.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery8.webp') }} 1x,
                                        {{ asset('images/gallery/gallery8@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery8.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery8@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery8.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery9.webp') }} 1x,
                                        {{ asset('images/gallery/gallery9@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery9.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery9@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery9.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="gallery__item">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery10.webp') }} 1x,
                                        {{ asset('images/gallery/gallery10@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery10.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery10@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery10.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
            </div>
            <div class="gallery__button">
                <a href="{{ route('gallery') }}" class="button button--primary">Посмотреть все фото</a>
            </div>
        </section>

        <section class="reviews section">
            <h2 class="section__title">Отзывы наших гостей</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <article class="review">
                            <div class="review__content">
                                <h3 class="review__title">ОТЛИЧНО</h3>
                                <div class="stars">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                </div>
                                <p>
                                Сервис ненавязчивый, полотенца мягкие, гигиенический набор в полном объёме (щётка, паста, шампунь, мыло) - на каждого (жили вдвоём с женой). В следующий раз постараемся опять сюда заселиться.
                                </p>
                            </div>
                            <div class="review__footer">
                                <h5 class="review__name">Птичка Невеличка</h5>
                                <p class="review__date">17.06.2021</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="review">
                            <div class="review__content">
                                <h3 class="review__title">ХОРОШО</h3>
                                <div class="stars">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                </div>
                                <p>
                                Сервис 4 из 5. Шведский стол на европейском уровне, что радует. Бассейн маленький, но море в километре от отеля, поэтому не критично. 4 звезды.
                                </p>
                            </div>
                            <div class="review__footer">
                                <h5 class="review__name">Птичка Невеличка</h5>
                                <p class="review__date">17.06.2021</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="review">
                            <div class="review__content">
                                <h3 class="review__title">ОТЛИЧНО</h3>
                                <div class="stars">
                                    <img src="{{ asset('images/icons/star-icon.svg') }}" alt="">
                                </div>
                                <p>
                                Отдых в данном отеле не понравился, от слова "совсем"! Бассейн не чистят неделями!!! Персонал врывается в номер без стука. Больше ни ногой сюда! 1 из 5!
                                </p>
                            </div>
                            <div class="review__footer">
                                <h5 class="review__name">Птичка Невеличка</h5>
                                <p class="review__date">17.06.2021</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        @include('footer')
        @include('scrollup')
    </main>
</body>

</html>