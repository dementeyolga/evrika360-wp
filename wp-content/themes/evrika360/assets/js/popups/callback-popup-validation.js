(function () {
  const consultationModalWrapper = document.getElementById(
    "popup-order-consultation",
  );
  const excursionModalWrapper = document.getElementById(
    "popup-order-excursion",
  );
  const callModalWrapper = document.getElementById("popup-order-call");
  const testModalWrapper = document.getElementById("popup-order-test");

  const modals = [
    consultationModalWrapper,
    excursionModalWrapper,
    callModalWrapper,
    testModalWrapper,
  ];

  modals.forEach((modal) => {
    const form = modal?.querySelector("form");

    const inputs = form?.querySelectorAll("input");

    form?.addEventListener("submit", (e) => {
      handleSubmit(e, inputs);
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
    const fieldWrapper = input?.closest("div.relative");
    const errorEl = fieldWrapper?.querySelector("p.input-error");

    if (errorMessage) {
      input?.classList.add("!border-red");
    } else {
      input?.classList.remove("!border-red");
    }

    if (errorEl instanceof HTMLParagraphElement) {
      errorEl.textContent = errorMessage;
    }
  }

  function createBitrixLink(name, post, phone, managersQuantity) {
    const searchParams = new URLSearchParams(location.search);

    const utmTerm = searchParams.get("utm_term") ?? "";
    const utmSource = searchParams.get("utm_source") ?? "";
    const utmMedium = searchParams.get("utm_medium") ?? "";
    const utmCampaign = searchParams.get("utm_campaign") ?? "";
    const utmContent = searchParams.get("utm_content") ?? "";

    const link = `https://sanq.bitrix24.by/rest/902/ga7jftrinp89adxe/crm.lead.add?fields[NAME]=${name}&fields[POST]=${post}&fields[PHONE][0][VALUE]=${phone}&fields[PHONE][0][VALUE_TYPE]=MOBILE&fields[UF_CRM_1733215921]=${managersQuantity}&fields[UTM_TERM]=${utmTerm}&fields[UTM_SOURCE]=${utmSource}&fields[UTM_MEDIUM]=${utmMedium}&fields[UTM_CAMPAIGN]=${utmCampaign}&fields[UTM_CONTENT]=${utmContent}&fields[SOURCE_ID]=UC_J20XSU&fields[ASSIGNED_BY_ID]=1&fields[TITLE]=Заявка с САЙТА`;

    return link;
  }

  async function handleSubmit(e, inputs) {
    e.preventDefault();

    const formErrorField = e.target.querySelector(".form-error-field");
    if (formErrorField) {
      formErrorField.textContent = "";
    }

    if (!e.target.checkValidity()) {
      inputs?.forEach((input) => {
        if (input instanceof HTMLInputElement) {
          validateInput(input);
          input.oninput = () => validateInput(input);
        }
      });

      return;
    }

    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData);
    const { name = "", post = "", phone = "", managersQuantity = "" } = data;

    const dialCode = e.target.querySelector(
      ".iti__selected-dial-code",
    )?.textContent;
    const prefix = dialCode ? dialCode + " " : "";
    const fullPhone = prefix + phone;

    const fetchURL = createBitrixLink(name, post, fullPhone, managersQuantity);

    try {
      const response = await fetch(fetchURL);
      if (response.status === 200) {
        if (location.pathname === "/thank-you") {
          location.reload();
        } else {
          location.pathname = "/thank-you";
        }

        e.target?.reset();
        inputs?.forEach((input) => (input.oninput = undefined));
      } else {
        throw new Error();
      }
    } catch {
      if (formErrorField) {
        formErrorField.textContent = "Что-то пошло не так, попробуйте еще раз";
      }
    }
  }
})();
