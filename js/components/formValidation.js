export function validateForm() {
  const form = document.querySelector("form");
  const fullName = document.querySelector("#name");
  const email = document.querySelector("#email");
  const subject = document.querySelector("#subject");
  const message = document.querySelector("#message");
  /* const captcha = document.querySelector(".field"); */

  function validateFormInputs(event) {
    event.preventDefault();

    if (fullName.value.trim().length > 0 && validateEmail(email.value) === true && subject.value.trim().length > 0 && message.value.trim().length > 0) {
      document.querySelector(".disabled").disabled = false;
    } else {
      document.querySelector(".disabled").disabled = true;
    }
  }

  form.addEventListener("keyup", validateFormInputs);

  function validateEmail(email) {
    const regEx = /\S+@\S+\.\S+/;
    const patternMatches = regEx.test(email);
    return patternMatches;
  }
}

document.querySelector(".field").addEventListener("submit", function (event) {
  const response = grecaptcha.getResponse();
  if (response.length === 0) {
    alert("please verify you are human!");
    event.preventDefault();
    return false;
  }
});
