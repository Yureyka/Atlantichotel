const guestsInput = document.getElementById("booking-guests-input");
const bookingModal = document.getElementById("booking-modal");
const updateButton = document.getElementById("booking-update-btn");

const inputNumbers = document.getElementById("input-numbers");
const inputAdults = document.getElementById("input-adults");
const inputKids = document.getElementById("input-kids");

const removeShowClass = () => {
    bookingModal.classList.remove("show");
};

guestsInput.addEventListener("click", () => {
    bookingModal.removeEventListener("mouseleave", removeShowClass);

    bookingModal.classList.add("show");

    bookingModal.addEventListener("mouseleave", removeShowClass, {
        once: true,
    });
});

updateButton.addEventListener("click", () => {
    guestsInput.value = `Номеров ${inputNumbers.value}, ${inputAdults.value} взрослых, ${inputKids.value} детей`;
});
