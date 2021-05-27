<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отель Атлантик</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
</head>

<body>
    @include('nav', ['isBlack' => true])

    @include('breadcrumbs', ['paths' => ['/' => 'Главная', 'gallery' => 'Галерея']])

    <main class="main">
        <div class="container">
            <div class="section">
                <h2 class="section__title">Галерея</h2>
            </div>
            <div class="gallery">
                <div class="gallery__item gallery__item--big">
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
                <div class="gallery__item gallery__item--big">
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
        </div>
    </main>

    @include('footer')
</body>

</html>