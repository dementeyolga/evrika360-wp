(function () {
  const expandableMenuItems = document.querySelectorAll(
    ".expandable-menu-item",
  );

  if (expandableMenuItems) {
    function handleWindowClick(e) {
      const path = e.composedPath();
      const label = path.find(
        (el) =>
          el.localName === "label" &&
          el.classList.contains("expandable-menu-item"),
      );
      const ul = path.find(
        (el) =>
          el.localName === "ul" &&
          (el.classList.contains("submenu") ||
            el.classList.contains("submenu-secondary")),
      );

      if (label || ul) {
        return;
      } else {
        expandableMenuItems.forEach((item) => {
          const input = item.querySelector("input");
          if (input) {
            input.checked = false;
          }
        });
      }
    }

    expandableMenuItems.forEach((item) => {
      item.addEventListener("click", (e) => {
        e.preventDefault();
        const input = e.currentTarget.querySelector("input");
        if (input) {
          input.checked = !input.checked;

          if (input.checked) {
            window.addEventListener("click", handleWindowClick);
          } else {
            window.removeEventListener("click", handleWindowClick);
          }
        }
      });
    });
  }
})();
