const sendButton = document.getElementById('feedback_btn');
const fullname = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const response = document.getElementById('response');

document.getElementById('feedback-form').addEventListener('submit', (e) => {
    e.preventDefault();
    send();
});

function send() {
    sendButton.setAttribute('disabled', true)
    const token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    const request = new Request("/feedback", {
        method: "POST",
        body: JSON.stringify({
            name: fullname.value,
            email: email.value,
            message: message.value
        }),
        headers: new Headers({
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": token
        })
    });

    fetch(request)
        .then(response => response.json())
        .then(data => {
            sendButton.removeAttribute('disabled');
            response.innerHTML = data.text;
            fullname.value = "";
            email.value = "";
            message.value = "";
        });
}