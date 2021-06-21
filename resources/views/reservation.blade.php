<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отель Атлантик</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
</head>

<body>
    @include('nav', ['isBlack' => true])

    @include('breadcrumbs', ['paths' => ['/' => 'Главная', 'reservation' => 'Бронирование']])

    @include('booking')

    <main class="main">
        <div class="container">
            <div class="cart">
                <div class="cart__summary">
                    <div class="cart__flex">
                        <div class="cart__icon">
                            <img src="{{ asset('images/cart-icon.svg') }}" alt="">
                        </div>
                        <div class="cart__info">
                            <h6 class="cart__text quantity">
                                Номеров: 0
                            </h6>
                            <h6 class="cart__text dates">
                                
                            </h6>
                        </div>
                    </div>
                    <div class="cart__flex">
                        <h5 class="cart__text">
                            Сумма:
                        </h5>
                        <h4 class="cart__sum">
                            0 рублей
                        </h4>
                        <form method="GET" action="/details">
                            <button type="submit" id="reservation_button" class="button button--primary">Бронировать</button>
                        </form>
                    </div>
                </div>
                <table class="cart__table">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Общая стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>

            @foreach ($data as $item)
            <article class="room-card">
                <div class="room-card__img">
                    <img src="{{count($item->images) > 0 ? $item->images[0]->url : ''}}" alt="Интерьер номера">
                </div>
                <div class="room-card__info">
                    <div>
                        <h3 class="room-card__title">{{$item->type}}</h3>
                        <p class="room-card__desc">
                            {!!nl2br($item->description)!!}
                        </p>
                        <div class="room-card__sum">
                            <h5 class="">Суточная цена</h5>
                            &mdash;
                            <h4 class="">{{$item->price}} рублей</h4>
                        </div>
                    </div>
                    <div class="room-card__options">
                        <button data-type="{{$item->type}}" data-price="{{$item->price}}" class="button button--primary add-row">Выбрать</button>
                        <a class="button button--tertiary" href="/apartments/{{$item->id}}">Смотреть</a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </main>

    @include('footer')
    @include('scrollup')

    <script src="{{ asset('js/reservationTable.js') }}"></script>
</body>

</html>