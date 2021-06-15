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
                            <h6 class="cart__text">
                                1 номер
                            </h6>
                            <h6 class="cart__text">
                                10 мая - 10 мая
                            </h6>
                        </div>
                    </div>
                    <div class="cart__flex">
                        <h5 class="cart__text">
                            Сумма:
                        </h5>
                        <h4 class="cart__sum">
                            100000 грывень
                        </h4>
                        <a href="#" class="button button--primary">Бронировать</a>
                    </div>
                </div>
                <table class="cart__table">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Количество</th>
                            <th>Общая стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>
                                    Одноместный номер
                                </h4>
                            </td>
                            <td>
                                <div class="cart__td-select">
                                    <select>
                                        <option value="">1 пчел</option>
                                        <option value="">2 пчела</option>
                                        <option value="">3 пчела</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="cart__td-flex">
                                    <h4>
                                        100 000 грывень
                                    </h4>
                                    <button class="cart__delete">
                                        <img src="{{ asset('images/delete.svg') }}" alt="">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>
                                    Одноместный номер
                                </h4>
                            </td>
                            <td>
                                <div class="cart__td-select">
                                    <select>
                                        <option value="">1 пчел</option>
                                        <option value="">2 пчела</option>
                                        <option value="">3 пчела</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="cart__td-flex">
                                    <h4>
                                        100 000 грывень
                                    </h4>
                                    <button class="cart__delete">
                                        <img src="{{ asset('images/delete.svg') }}" alt="">
                                    </button>
                                </div>
                            </td>
                        </tr>
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
                        <select>
                            <option value="">1 номер</option>
                            <option value="">2 номера</option>
                            <option value="">3 номера</option>
                            <option value="">4 номера</option>
                            <option value="">5 номеров</option>
                        </select>
                        <button class="button button--primary">Выбрать</button>
                        <a class="button button--tertiary" href="/apartments/{{$item->id}}">Смотреть</a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </main>

    @include('footer')
    @include('scrollup')
</body>

</html>