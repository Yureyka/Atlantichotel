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

            <article class="room-card">
                <div class="room-card__img">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="room-card__info">
                    <div>
                        <h3 class="room-card__title">Одноместный номер</h3>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <div class="room-card__sum">
                            <h5 class="">Суточная цена</h5>
                            &mdash;
                            <h4 class="">100 000 грывень</h4>
                        </div>
                    </div>
                    <div class="room-card__options">
                        <select>
                            <option value="">1 пчел</option>
                            <option value="">2 пчела</option>
                            <option value="">3 пчела</option>
                        </select>
                        <button class="button button--primary">Выбрать</button>
                    </div>
                </div>
            </article>
            <article class="room-card">
                <div class="room-card__img">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="room-card__info">
                    <div>
                        <h3 class="room-card__title">Одноместный номер</h3>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <div class="room-card__sum">
                            <h5 class="">Суточная цена</h5>
                            &mdash;
                            <h4 class="">100 000 грывень</h4>
                        </div>
                    </div>
                    <div class="room-card__options">
                        <select>
                            <option value="">1 пчел</option>
                            <option value="">2 пчела</option>
                            <option value="">3 пчела</option>
                        </select>
                        <button class="button button--primary">Выбрать</button>
                    </div>
                </div>
            </article>
            <article class="room-card">
                <div class="room-card__img">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="room-card__info">
                    <div>
                        <h3 class="room-card__title">Одноместный номер</h3>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <div class="room-card__sum">
                            <h5 class="">Суточная цена</h5>
                            &mdash;
                            <h4 class="">100 000 грывень</h4>
                        </div>
                    </div>
                    <div class="room-card__options">
                        <select>
                            <option value="">1 пчел</option>
                            <option value="">2 пчела</option>
                            <option value="">3 пчела</option>
                        </select>
                        <button class="button button--primary">Выбрать</button>
                    </div>
                </div>
            </article>
            <article class="room-card">
                <div class="room-card__img">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="room-card__info">
                    <div>
                        <h3 class="room-card__title">Одноместный номер</h3>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <div class="room-card__sum">
                            <h5 class="">Суточная цена</h5>
                            &mdash;
                            <h4 class="">100 000 грывень</h4>
                        </div>
                    </div>
                    <div class="room-card__options">
                        <select>
                            <option value="">1 пчел</option>
                            <option value="">2 пчела</option>
                            <option value="">3 пчела</option>
                        </select>
                        <button class="button button--primary">Выбрать</button>
                    </div>
                </div>
            </article>
            <article class="room-card">
                <div class="room-card__img">
                    <picture>
                        <source srcset="{{ asset('images/gallery/gallery1.webp') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.webp') }} 2x" type="image/webp">
                        <source srcset="{{ asset('images/gallery/gallery1.jpg') }} 1x,
                                        {{ asset('images/gallery/gallery1@2x.jpg') }} 2x">
                        <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="Интерьер номера">
                    </picture>
                </div>
                <div class="room-card__info">
                    <div>
                        <h3 class="room-card__title">Одноместный номер</h3>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <p class="room-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ex asperiores repellendus ad maxime, temporibus voluptatibus corrupti iste in ducimus a voluptatum.
                            Natus ducimus laborum ad voluptate repellendus itaque, atque delectus.
                        </p>
                        <div class="room-card__sum">
                            <h5 class="">Суточная цена</h5>
                            &mdash;
                            <h4 class="">100 000 грывень</h4>
                        </div>
                    </div>
                    <div class="room-card__options">
                        <select>
                            <option value="">1 пчел</option>
                            <option value="">2 пчела</option>
                            <option value="">3 пчела</option>
                        </select>
                        <button class="button button--primary">Выбрать</button>
                    </div>
                </div>
            </article>
        </div>
    </main>

    @include('footer')
</body>

</html>