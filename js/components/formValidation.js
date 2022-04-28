export function validateForm() {

    const form = document.querySelector("form");
    const fullName = document.querySelector("#name");
    const email = document.querySelector("#email");
    const subject = document.querySelector("#subject");
    const message = document.querySelector("#message");
    const checkbox = document.querySelector(".checkbox");

    function validateFormInputs(event) {
        event.preventDefault();

        if (fullName.value.trim().length > 0 && validateEmail(email.value) === true && subject.value.trim().length > 0 && message.value.trim().length > 0 && checkbox.checked) {
            document.querySelector(".disabled").disabled = false;
        }
    }

    form.addEventListener("keyup", validateFormInputs);

    function validateEmail(email) {
        const regEx = /\S+@\S+\.\S+/;
        const patternMatches = regEx.test(email);
        return patternMatches;
    }
}


