document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('form');

    const validate = (event) => {
        event.preventDefault();

        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');

        if (name.value === "") {
            alert("Please enter your name.");
            name.focus();
            return false;
        }
        if (email.value === "") {
            alert("Please enter your email.");
            email.focus();
            return false;
        }
        if (phone.value === "") {
            alert("Please enter your phone number.");
            phone.focus();
            return false;
        }
        if (subject.value === "") {
            alert("Please enter your subject.");
            subject.focus();
            return false;
        }
        if (message.value === "") {
            alert("Please enter a message.");
            message.focus();
            return false;
        }
        if (!nameValid(name.value)) {
            alert("Please enter a valid name.");
            name.focus();
            return false;
        }
        if (!emailValid(email.value)) {
            alert("Please enter a valid email.");
            email.focus();
            return false;
        }
        if (!phoneValid(phone.value)) {
            alert("Please enter a valid phone number.");
            phone.focus();
            return false;
        }
        if (!subjectValid(subject.value)) {
            alert("Please enter a valid subject.");
            subject.focus();
            return false;
        }
        if (!messageValid(message.value)) {
            alert("Please enter a valid message.");
            message.focus();
            return false;
        }

        form.submit();
        alert("Message sent successfully!");
    };

    const nameValid = (name) => /^[a-zA-Z ]{3,}$/.test(name);
    const emailValid = (email) => /^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9_\-.]+\.[a-zA-Z]{2,4}$/.test(email);
    const phoneValid = (phone) => /^\d{9}$/.test(phone);
    const subjectValid = (subject) => /^[a-zA-Z0-9_\-., ]{4,}$/.test(subject);
    const messageValid = (message) => /^[a-zA-Z0-9_\-.,!? ]{3,}$/.test(message);

    form.addEventListener('submit', validate);
});
