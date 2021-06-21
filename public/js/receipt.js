const transfer = document.querySelector('.transfer-sum h3');
const sum = document.querySelector('.sum h2');
const receipt__table = document.getElementsByClassName('receipt__table')[0];
const receipt__summary = document.querySelector('.receipt__summary h3');

if (transfer) {
    sum.innerHTML = parseInt(sum.innerHTML) + parseInt(transfer.innerHTML) + " рублей"
}

if (JSON.parse(localStorage.getItem("rooms")).length > 0) {
    for (const row of JSON.parse(localStorage.getItem("rooms"))) {
        receipt__table.insertAdjacentHTML(
            "beforeend",
            `
            <tr class="room_types">
                <td>
                    <h3>${row.type}</h3>
                </td>
                <td class="receipt__td-right">
                    <h3>${row.price} руб.</h3>
                </td>
            </tr>
        `
        );
    }
}

receipt__summary.innerHTML = "Номеров: " + JSON.parse(localStorage.getItem("rooms")).length