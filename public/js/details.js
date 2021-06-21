const rooms = document.getElementsByClassName("rooms")[0];
const sum = document.getElementsByClassName("cart__sum")[0];
const arrivalDate = document.getElementById("arrival_date");
const departureDate = document.getElementById("departure_date");
const finalPrice = document.getElementById("final_price");
const localRooms = JSON.parse(localStorage.getItem("rooms"));

if (localRooms.length > 0) {
    rooms.innerHTML = JSON.parse(localStorage.getItem("rooms")).map(
        (item, index) => (index == 0 ? item.type : ` ${item.type}`)
    );
} else {
    rooms.innerHTML = "Выбранных номеров нет. Пойди и выбери номера, ты, клоун";
}

const superfinalPrice = Object.values(localRooms).reduce(
    (s, { price }) => s + Number(price),
    0
);
sum.innerHTML = `${superfinalPrice} рублей`;
finalPrice.value = superfinalPrice;
