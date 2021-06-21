const arrivalDate = document.getElementById("arrival-date");
const departureDate = document.getElementById("departure-date");
const city = document.getElementById("city");
const btn = document.getElementById("booking-submit");

arrivalDate.value = localStorage.getItem("arrival-date");
departureDate.value = localStorage.getItem("departure-date");
city.value = localStorage.getItem("city");

btn.addEventListener("click", () => {
    localStorage.setItem("arrival-date", arrivalDate.value);
    localStorage.setItem("departure-date", departureDate.value);
    localStorage.setItem("city", city.value);
});

if (!localStorage.getItem("city")) {
    localStorage.setItem("city", "Феодосия");
    city.value = "Феодосия";
}
