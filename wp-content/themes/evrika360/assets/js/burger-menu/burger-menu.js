(function () {
  const burgerTrigger = document.getElementById("burger-trigger");
  const burgerCloseBtn = document.getElementById("burger-close-btn");
  const burgerMenuWrapper = document.getElementById("burger-menu-wrapper");
  const burgerLinks = burgerMenuWrapper?.querySelectorAll("a");

  burgerTrigger?.addEventListener("click", () => openBurger());

  burgerLinks?.forEach((link) => {
    link?.addEventListener("click", () => closeBurger());
  });

  burgerCloseBtn?.addEventListener("click", () => closeBurger());

  burgerMenuWrapper?.addEventListener("click", ({ target, currentTarget }) => {
    if (target === currentTarget) {
      closeBurger();
    }
  });

  function closeBurger() {
    burgerMenuWrapper?.classList.add("hidden");
  }

  function openBurger() {
    burgerMenuWrapper?.classList.remove("hidden");
  }
})();
