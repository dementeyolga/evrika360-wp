const consultationModalWrapper = document.getElementById(
  'popup-order-consultation',
);
const excursionModalWrapper = document.getElementById('popup-order-excursion');
const callModalWrapper = document.getElementById('popup-order-call');
const testModalWrapper = document.getElementById('popup-order-test');

const callbackModals = document.querySelectorAll('.modal');

const consultationModalToggles = document.querySelectorAll(
  '.consultation-modal-toggle',
);
const excursionModalToggles = document.querySelectorAll(
  '.excursion-modal-toggle',
);
const callModalToggles = document.querySelectorAll('.call-modal-toggle');
const testModalToggles = document.querySelectorAll('.test-modal-toggle');

const disableScroll = () => (document.body.style.overflow = 'hidden');
const enableScroll = () => (document.body.style.overflow = '');

// Add closing logics to all modals
callbackModals.forEach((wrapper) => {
  function closeModal() {
    wrapper.style.display = 'none';
    enableScroll();
  }

  wrapper.addEventListener('click', (e) => {
    if (e.target === e.currentTarget) closeModal();
  });

  const closeBtns = wrapper.querySelectorAll('button.close');
  closeBtns.forEach((btn) => (btn.onclick = closeModal));
});

// Activate modal when toggle is clicked
consultationModalToggles.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    consultationModalWrapper.style.display = 'flex';
    disableScroll();
  });
});

excursionModalToggles.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    excursionModalWrapper.style.display = 'flex';
    disableScroll();
  });
});

callModalToggles.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    callModalWrapper.style.display = 'flex';
    disableScroll();
  });
});

testModalToggles.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    testModalWrapper.style.display = 'flex';
    disableScroll();
  });
});
