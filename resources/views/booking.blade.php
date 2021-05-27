<div class="container">
    <div class="booking">
        <form action="" class="">
            <div class="booking__inputs">
                <label class="booking__label">
                    <span>Дата въезда</span>
                    <input class="booking__input" type="date">
                </label>
                <label class="booking__label">
                    <span>Дата выезда</span>
                    <input class="booking__input" type="date">
                </label>
                <label class="booking__label">
                    <span>Город</span>
                    <select class="booking__input booking__input--select">
                        <option value="Севастополь">Севастополь</option>
                        <option value="Симферополь">Симферополь</option>
                        <option value="Саки">Саки</option>
                        <option value="Феодосия" selected>Феодосия</option>
                    </select>
                </label>
                <label class="booking__label booking__label--relative">
                    <span>Гости</span>
                    <div class="booking__guests">
                        <input id="booking-guests-input" class="booking__input" type="text" placeholder="Номеров 1, 2 взрослых, 0 детей" autocomplete="off">
                        <img src="{{ asset('./images/icons/guests.svg') }}" alt="">
                    </div>

                    <div id="booking-modal" class="booking__modal">
                        <div class="modal__row">
                            <div class="modal__label">
                                <img src="{{ asset('./images/icons/bed.svg') }}" alt="Кровать">
                                <h3>Номеров</h3>
                            </div>
                            <input id="input-numbers" class="modal__input" type="number" value="0">
                        </div>
                        <div class="modal__row">
                            <div class="modal__label">
                                <img src="{{ asset('./images/icons/adult.svg') }}" alt="Взрослый">
                                <h3>Взрослых</h3>
                            </div>
                            <input id="input-adults" class="modal__input" type="number" value="0">
                        </div>
                        <div class="modal__row">
                            <div class="modal__label">
                                <img src="{{ asset('./images/icons/child.svg') }}" alt="Дети">
                                <h3>Детей</h3>
                            </div>
                            <input id="input-kids" class="modal__input" type="number" value="0">
                        </div>
                        <div class="modal__button">
                            <button id="booking-update-btn" type="button" class="button button--primary">Обновить</button>
                        </div>
                    </div>

                </label>
                <button class="button button--primary">Забронировать</button>
            </div>
            <div class="booking__transfer">
                <input class="booking__checkbox" type="checkbox" id="transfer">
                <label for="transfer">с трансфером</label>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('./js/booking.js') }}"></script>