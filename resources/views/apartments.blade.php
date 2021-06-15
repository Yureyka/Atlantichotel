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

    @include('breadcrumbs', ['paths' => ['/' => 'Главная', 'reservation' => 'Номера', 'apartments' => 'Одноместный номер']])

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
                                @foreach ($data->images as $image)
                                <div>
                                    <img src="{{$image->url}}" alt="Интерьер номера">
                                </div>
                                @endforeach
                            </div>

                            <ul id="customize-thumbnails" class="apartments__slider">
                                @foreach ($data->images as $image)
                                <li>
                                    <img src="{{$image->url}}" alt="Интерьер номера">
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="apartments__info">
                            <div class="apartments__top">
                                <h3 class="apartments__title">{{$data->type}}</h3>
                                <p class="apartments__desc">
                                    {!!nl2br($data->description)!!}
                                </p>
                            </div>
                            <div class="apartments__bottom">
                                <div class="apartments__sum">
                                    <h5 class="">Суточная цена</h5>
                                    &mdash;
                                    <h4 class="">{{$data->price}} рублей</h4>
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
                            @foreach(explode(", ", $data->equipment) as $fact)
                            <p class="apartments__desc">&mdash;&nbsp;{{$fact}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apartments__facts">
                            <h3 class="apartments__title">В стоимость номера включено:</h3>
                            @foreach(explode(", ", $data->includes) as $fact)
                            <p class="apartments__desc">&mdash;&nbsp;{{$fact}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('footer')
    @include('scrollup')

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