<nav class="nav {{ isset($isBlack) ? 'nav--black' : '' }}">
    <div class="container">
        <div class="nav__wrapper">
            <div class="nav__info">
                <div class="nav__logo">
                    <a href="/">
                        <img src="{{ asset('images/logo.svg') }}" alt="Atlantic Logo">
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
        </div>
    </div>
</nav>