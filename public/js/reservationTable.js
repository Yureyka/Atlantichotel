const addRowButtons = document.getElementsByClassName("add-row");
const deleteRow = document.getElementsByClassName("cart__delete");
const cartTable = document.getElementsByClassName("cart__table")[0];
const sum = document.getElementsByClassName("cart__sum")[0];
const quantity = document.getElementsByClassName("quantity")[0];
const date = document.getElementsByClassName("dates")[0];
const reservationBtn = document.getElementById("reservation_button");

if (JSON.parse(localStorage.getItem("rooms")).length > 0) {
    for (const row of JSON.parse(localStorage.getItem("rooms"))) {
        cartTable.insertAdjacentHTML(
            "beforeend",
            `
            <tr>
                <td>
                    <h4>
                        ${row.type}
                    </h4>
                </td>
                <td>
                    <div class="cart__td-flex">
                        <h4>
                            ${row.price} рублей
                        </h4>
                        <button class="cart__delete">
                            <img src="/images/delete.svg" alt="">
                        </button>
                    </div>
                </td>
            </tr>
        `
        );
    }
}

if (
    localStorage.getItem("arrival-date") &&
    localStorage.getItem("departure-date")
) {
    date.innerHTML = `${localStorage.getItem(
        "arrival-date"
    )} &ndash; ${localStorage.getItem("departure-date")}`;
}

function sumPrice() {
    const array = JSON.parse(localStorage.getItem("rooms")) || [];

    const sumPrice1 =
        array.length > 0
            ? Object.values(array).reduce(
                  (s, { price }) => s + Number(price),
                  0
              )
            : 0;

    sum.innerHTML = `${sumPrice1} рублей`;

    quantity.innerHTML = `Номеров: ${array.length}`;

    if (sumPrice1 == 0) {
        reservationBtn.setAttribute("disabled", "disabled");
    } else {
        reservationBtn.removeAttribute("disabled");
    }
}

sumPrice();

function deleteRows() {
    for (const button of deleteRow) {
        function onHandleDelete() {
            let result = [];
            if (JSON.parse(localStorage.getItem("rooms"))) {
                result.push(...JSON.parse(localStorage.getItem("rooms")));
            }

            for (let i = 0; i < result.length; i++) {
                if (
                    result[i].type ==
                    button.parentNode.parentNode.parentNode.getElementsByTagName(
                        "h4"
                    )[0].innerText
                ) {
                    result.splice(i, 1);
                    break;
                }
            }
            localStorage.setItem("rooms", JSON.stringify(result));
            sumPrice();

            button.parentNode.parentNode.parentNode.remove();
        }

        button.removeEventListener("click", onHandleDelete);

        button.addEventListener("click", onHandleDelete);
    }
}

deleteRows();

for (const button of addRowButtons) {
    button.addEventListener("click", () => {
        const result = [];
        if (JSON.parse(localStorage.getItem("rooms"))) {
            result.push(...JSON.parse(localStorage.getItem("rooms")));
        }
        result.push({
            type: button.getAttribute("data-type"),
            price: button.getAttribute("data-price"),
        });
        localStorage.setItem("rooms", JSON.stringify(result));

        cartTable.insertAdjacentHTML(
            "beforeend",
            `
            <tr>
                <td>
                    <h4>
                        ${button.getAttribute("data-type")}
                    </h4>
                </td>
                <td>
                    <div class="cart__td-flex">
                        <h4>
                            ${button.getAttribute("data-price")} рублей
                        </h4>
                        <button class="cart__delete">
                        <img src="/images/delete.svg" alt="">
                        </button>
                    </div>
                </td>
            </tr>
        `
        );
        sumPrice();
        deleteRows();
    });
}
