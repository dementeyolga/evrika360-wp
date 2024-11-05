(function () {
  const callback = (entries) => {
    entries.forEach(({ target, isIntersecting, intersectionRatio }) => {
      if (isIntersecting) {
        if (intersectionRatio > 0.9) {
          target.classList.add('animate-fade-in-down');
        }

        return;
      }

      target.classList.remove('animate-fade-in-down');
    });
  };

  const options = {
    rootMargin: '0px',
    threshold: [0, 1],
  };

  // Create the observer
  const observer = new IntersectionObserver(callback, options);

  const targetElements = document.querySelectorAll('.chat');

  targetElements.forEach((el) => observer.observe(el));
})();
