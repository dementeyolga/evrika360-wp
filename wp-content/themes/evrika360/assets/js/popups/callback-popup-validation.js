// consultationModalWrapper
// excursionModalWrapper
// callModalWrapper
// testModalWrapper

function defineErrorMessage(input) {
  if (input instanceof HTMLInputElement) {
    if (input.validity.valueMissing) {
      return 'Поле обязательно для заполнения';
    }

    if (input.validity.tooShort) {
      return `Поле должно содержать минимум ${input.minLength} символа`;
    }

    if (input.validity.patternMismatch) {
      return 'Неверный формат данных';
    }
  }
}

function validateInput(input) {
  const errorMessage = defineErrorMessage(input);
  const errorEl = input.nextElementSibling;

  if (errorMessage) {
    input.classList.add('!border-red');
    input.parentElement.classList.add('mb-5');
  } else {
    input.classList.remove('!border-red');
    input.parentElement.classList.remove('mb-5');
  }

  if (errorEl instanceof HTMLParagraphElement) {
    errorEl.textContent = errorMessage;
  }
}

const modals = [
  consultationModalWrapper,
  excursionModalWrapper,
  callModalWrapper,
  testModalWrapper,
];

modals.forEach((modal) => {
  const form = modal.querySelector('form');

  const inputs = form?.querySelectorAll('input');

  form?.addEventListener('submit', (e) => {
    e.preventDefault();

    if (!e.target.checkValidity()) {
      inputs.forEach((input) => {
        validateInput(input);
        input.oninput = () => validateInput(input);
      });

      return;
    }

    window.location.pathname = '/thank-you';
    e.target.reset();
    inputs.forEach((input) => (input.oninput = undefined));
  });
});
