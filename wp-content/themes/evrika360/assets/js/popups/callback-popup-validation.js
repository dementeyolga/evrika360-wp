// Implement form validation based on existing modals variables from 'popups.js'

(function () {
  const modals = [
    consultationModalWrapper,
    excursionModalWrapper,
    callModalWrapper,
    testModalWrapper,
  ];

  modals.forEach((modal) => {
    const form = modal.querySelector("form");

    const inputs = form?.querySelectorAll("input");

    form?.addEventListener("submit", (e) => {
      e.preventDefault();

      if (!e.target.checkValidity()) {
        inputs.forEach((input) => {
          validateInput(input);
          input.oninput = () => validateInput(input);
        });

        return;
      }

      window.location.pathname = "/thank-you";
      e.target.reset();
      inputs.forEach((input) => (input.oninput = undefined));
    });
  });

  function defineErrorMessage(input) {
    if (input instanceof HTMLInputElement) {
      if (input.validity.valueMissing) {
        return "Поле обязательно для заполнения";
      }

      if (input.validity.tooShort) {
        return `Поле должно содержать минимум ${input.minLength} символа`;
      }

      if (input.validity.patternMismatch) {
        return "Неверный формат данных";
      }
    }
  }

  function validateInput(input) {
    const errorMessage = defineErrorMessage(input);
    const fieldWrapper = input.closest("div.relative");
    const errorEl = fieldWrapper.querySelector("p.input-error");

    if (errorMessage) {
      input.classList.add("!border-red");
    } else {
      input.classList.remove("!border-red");
    }

    if (errorEl instanceof HTMLParagraphElement) {
      errorEl.textContent = errorMessage;
    }
  }
})();
