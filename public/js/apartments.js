const reservationBtn = document.getElementById("apart_reservation");
const type = document.getElementsByClassName("apartments__title")[0];
const sum = document.getElementsByClassName("sum")[0];

reservationBtn.addEventListener("click", () => {
    const result = [];
    if (JSON.parse(localStorage.getItem("rooms"))) {
        result.push(...JSON.parse(localStorage.getItem("rooms")));
    }
    result.push({
        type: type.innerHTML,
        price: parseInt(sum.innerHTML),
    });
    localStorage.setItem("rooms", JSON.stringify(result));
});
