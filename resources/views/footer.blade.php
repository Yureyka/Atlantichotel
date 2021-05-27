<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="footer__logo">
                    <a href="/">
                        <img src="{{ asset('images/logo.svg') }}" alt="Atlantic Logo">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h5 class="footer__title">Полезные ссылки</h5>
                <ul>
                    <li class="footer__link"><a href="{{ route('welcome') }}">Главная</a></li>
                    <li class="footer__link"><a href="{{ route('gallery') }}">Галерея</a></li>
                    <li class="footer__link"><a href="{{ route('reservation') }}">Номера</a></li>
                    <li class="footer__link"><a href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h5 class="footer__title">Связаться с нами</h5>
                <div class="footer__link">
                    <a href="tel:89787777777">+7 (978) 777-77-77</a>
                </div>
                <div class="footer__link">
                    <a href="mail:atlantic@gmail.com">atlantic@gmail.com</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer__social">
                    <h5 class="footer__title">Мы в соцсетях</h5>
                    <div class="footer__icons">
                        <img src="{{ asset('images/icons/inst-icon.svg') }}" alt="">
                        <img src="{{ asset('images/icons/fb-icon.svg') }}" alt="">
                        <img src="{{ asset('images/icons/vk-icon.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>