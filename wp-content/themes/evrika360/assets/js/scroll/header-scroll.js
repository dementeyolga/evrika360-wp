window.addEventListener("scroll", changeHeaderStyles);
document.addEventListener("DOMContentLoaded", changeHeaderStyles);

const toggle = document.getElementById("headerScrollToggle");

function changeHeaderStyles() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    if (!toggle.checked) {
      toggle.checked = true;
    }
  } else {
    if (toggle.checked) {
      toggle.checked = false;
    }
  }
}
