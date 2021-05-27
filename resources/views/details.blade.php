<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отель Атлантик</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
</head>

<body>
    @include('nav', ['isBlack' => true])

    @include('breadcrumbs', ['paths' => ['/' => 'Главная', 'reservation' => 'Бронирование', 'details' => 'Заявка на бронирование']])

    <main class="main">
        <div class="container">
            <div class="cart">
                <div class="cart__summary">
                    <div class="cart__flex">
                        <div class="cart__icon">
                            <img src="{{ asset('images/bed-icon.svg') }}" alt="">
                        </div>
                        <div class="cart__info">
                            <h6 class="cart__text">
                                1 одноместный номер, 1 двуместный номер
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
                    </div>
                </div>
            </div>
            <div class="section">
                <h2 class="section__title">Детали бронирования</h2>
            </div>
            <section class="details">
                <form action="">
                    <h3 class="details__title">Клиент</h3>
                    <h5 class="details__subtitle">Пожалуйста, введите ваше имя, паспортные данные и выберите количество персон</h5>
                    <div class="details__form">
                        <div class="details__inputs">
                            <input type="text" class="details__input details__input--text" placeholder="Имя">
                            <input type="text" class="details__input details__input--text" placeholder="Фамилия">
                            <input type="text" class="details__input details__input--text" placeholder="Отчество">
                            <input type="text" class="details__input details__input--text" placeholder="Серия и номер паспорта">
                        </div>
                        <div class="details__persons">
                            <h5>Человек:</h5>
                            <select name="" id="">
                                <option value="1" selected>1 человек</option>
                                <option value="2">2 человек</option>
                                <option value="3">3 человек</option>
                                <option value="4">4 человек</option>
                                <option value="5">5 человек</option>
                                <option value="6">6 человек</option>
                            </select>
                        </div>
                    </div>
                    <h3 class="details__title">Время заезда и выезда</h3>
                    <h5 class="details__subtitle">Вы можете выбрать удобное время заезда и выезда. Стандартное время &mdash; 12:00</h5>
                    <div class="details__form">
                        <div class="details__time">
                            <h3>Заезд</h3>
                            <input type="date" class="details__input details__input--date">
                            <input type="time" class="details__input details__input--time" value="12:00">
                            <h3>Выезд</h3>
                            <input type="date" class="details__input details__input--date">
                            <input type="time" class="details__input details__input--time" value="12:00">
                        </div>
                        <textarea name="" id="" rows="5" placeholder="Дополнительные комментарии"></textarea>

                        <div class="details__transfer">
                            <input class="details__checkbox" type="checkbox" id="transfer">
                            <label for="transfer">Трансфер</label>
                        </div>
                    </div>
                    <h3 class="details__title">Контакты для связи</h3>
                    <h5 class="details__subtitle">На этот адрес электронной почты будет выслано письмо с подтверждением</h5>
                    <div class="details__form">
                        <div class="details__contacts">
                            <input type="email" class="details__input details__input--contact" placeholder="Email">
                            <h5 class="details__subtitle">Пожалуйста, введите номер телефона. При необходимости мы свяжемся с Вами для уточнения деталей</h5>
                            <input type="tel" class="details__input details__input--contact" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="details__send">
                        <button class="button button--primary" type="submit">Отправить</button>
                    </div>
                </form>
            </section>
        </div>
    </main>

    @include('footer')
    @include('scrollup')
</body>

</html>