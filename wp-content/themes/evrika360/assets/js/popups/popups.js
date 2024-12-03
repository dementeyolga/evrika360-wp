(function () {
  const consultationModalWrapper = document.getElementById(
    "popup-order-consultation",
  );
  const excursionModalWrapper = document.getElementById(
    "popup-order-excursion",
  );
  const callModalWrapper = document.getElementById("popup-order-call");
  const testModalWrapper = document.getElementById("popup-order-test");
  const priceMoreModalWrapper = document.getElementById("popup-whats-more");
  const videoPromoModalWrapper = document.getElementById("popup-video-promo");
  const videoFoundersModalWrapper = document.getElementById(
    "popup-video-founders",
  );

  const callbackModals = document.querySelectorAll(".modal");

  const consultationModalToggles = document.querySelectorAll(
    ".consultation-modal-toggle",
  );
  const excursionModalToggles = document.querySelectorAll(
    ".excursion-modal-toggle",
  );
  const callModalToggles = document.querySelectorAll(".call-modal-toggle");
  const testModalToggles = document.querySelectorAll(".test-modal-toggle");
  const priceMoreModalToggles = document.querySelectorAll(".price-more-toggle");
  const videoPromoModalToggles = document.querySelectorAll(
    ".video-promo-toggle",
  );
  const videoFoundersModalToggles = document.querySelectorAll(
    ".video-founders-toggle",
  );

  const disableScroll = () => (document.body.style.overflow = "hidden");
  const enableScroll = () => (document.body.style.overflow = "");

  // Add closing logics to all modals
  callbackModals?.forEach((wrapper) => {
    function closeModal() {
      if (wrapper) {
        wrapper.style.display = "none";
        const form = wrapper?.querySelector("form");
        const iframe = wrapper?.querySelector("iframe");

        if (form) {
          form.reset();
        }

        if (iframe) {
          iframe.src = iframe.src;
        }

        enableScroll();
      }
    }

    wrapper?.addEventListener("click", (e) => {
      if (e.target === e.currentTarget) closeModal();
    });

    const closeBtns = wrapper?.querySelectorAll("button.close");
    closeBtns?.forEach((btn) => (btn.onclick = closeModal));
  });

  // Show modal when toggle is clicked
  consultationModalToggles?.forEach((toggle) => {
    toggle?.addEventListener("click", () => {
      if (consultationModalWrapper) {
        consultationModalWrapper.style.display = "flex";
        disableScroll();
      }
    });
  });

  excursionModalToggles?.forEach((toggle) => {
    toggle?.addEventListener("click", () => {
      if (excursionModalWrapper) {
        excursionModalWrapper.style.display = "flex";
        disableScroll();
      }
    });
  });

  callModalToggles?.forEach((toggle) => {
    toggle?.addEventListener("click", () => {
      if (callModalWrapper) {
        callModalWrapper.style.display = "flex";
        disableScroll();
      }
    });
  });

  testModalToggles?.forEach((toggle) => {
    toggle?.addEventListener("click", () => {
      if (testModalWrapper) {
        testModalWrapper.style.display = "flex";
        disableScroll();
      }
    });
  });

  if (document.documentElement.clientWidth >= 1024) {
    priceMoreModalToggles?.forEach((toggle) => {
      toggle?.addEventListener("click", () => {
        if (priceMoreModalWrapper) {
          priceMoreModalWrapper.style.display = "flex";
          disableScroll();
        }
      });
    });
  }

  videoPromoModalToggles?.forEach((toggle) => {
    toggle?.addEventListener("click", () => {
      if (videoPromoModalWrapper) {
        videoPromoModalWrapper.style.display = "flex";
        disableScroll();
      }
    });
  });

  videoFoundersModalToggles?.forEach((toggle) => {
    toggle?.addEventListener("click", () => {
      if (videoFoundersModalWrapper) {
        videoFoundersModalWrapper.style.display = "flex";
        disableScroll();
      }
    });
  });
})();
