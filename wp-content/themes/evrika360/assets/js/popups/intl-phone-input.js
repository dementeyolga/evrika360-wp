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
    const input = modal?.querySelector("input[data-phone]");
    const container = input?.closest("div.relative");

    if (input) {
      window.intlTelInput(input, {
        i18n: intlPhoneTranslationsRu,
        countryOrder: ["by", "ru"],
        initialCountry: "auto",
        dropdownContainer: container,
        separateDialCode: true,
        useFullscreenPopup: false,
        geoIpLookup: (callback) => {
          fetch("https://ipapi.co/json")
            .then((res) => res.json())
            .then((data) => callback(data.country_code))
            .catch(() => callback("by"));
        },
      });
    }
  });
})();
