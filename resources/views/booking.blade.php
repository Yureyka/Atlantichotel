<div class="container">
    <div class="booking">
        <form action="/reservation" method="get">
            <div class="booking__inputs">
                <label class="booking__label">
                    <span>Дата въезда</span>
                    <input id="arrival-date" class="booking__input" type="date">
                </label>
                <label class="booking__label">
                    <span>Дата выезда</span>
                    <input id="departure-date" class="booking__input" type="date">
                </label>
                <label class="booking__label">
                    <span>Город</span>
                    <select id="city" name="city" class="booking__input booking__input--select">
                        <option value="Севастополь">Севастополь</option>
                        <option value="Симферополь">Симферополь</option>
                        <option value="Саки">Саки</option>
                        <option value="Феодосия" selected>Феодосия</option>
                    </select>
                </label>
                <button id="booking-submit" type="submit" class="button button--primary">Найти</button>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/booking.js') }}"></script>