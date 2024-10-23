const pricesSliderOptions = { align: "start", loop: true };

const pricesSliderEmblaNode = document.querySelector(".prices-embla");
const pricesSliderViewportNode = pricesSliderEmblaNode.querySelector(
  ".prices-embla__viewport",
);
const pricesSliderPrevBtnNode = pricesSliderEmblaNode.querySelector(
  ".prices-embla__button--prev",
);
const pricesSliderNextBtnNode = pricesSliderEmblaNode.querySelector(
  ".prices-embla__button--next",
);
const pricesSliderDotsNode = pricesSliderEmblaNode.querySelector(
  ".prices-embla__dots",
);

const pricesSliderPlugins = [EmblaCarouselAutoHeight()];

const pricesSliderEmblaApi = EmblaCarousel(
  pricesSliderViewportNode,
  pricesSliderOptions,
  pricesSliderPlugins,
);

const pricesSliderAddTogglePrevNextBtnsActive = (
  emblaApi,
  prevBtn,
  nextBtn,
) => {
  const togglePrevNextBtnsState = () => {
    if (emblaApi.canScrollPrev()) prevBtn.removeAttribute("disabled");
    else prevBtn.setAttribute("disabled", "disabled");

    if (emblaApi.canScrollNext()) nextBtn.removeAttribute("disabled");
    else nextBtn.setAttribute("disabled", "disabled");
  };

  emblaApi
    .on("select", togglePrevNextBtnsState)
    .on("init", togglePrevNextBtnsState)
    .on("reInit", togglePrevNextBtnsState);

  return () => {
    prevBtn.removeAttribute("disabled");
    nextBtn.removeAttribute("disabled");
  };
};

const pricesSliderAddPrevNextBtnsClickHandlers = (
  emblaApi,
  prevBtn,
  nextBtn,
) => {
  const scrollPrev = () => {
    emblaApi.scrollPrev();
  };
  const scrollNext = () => {
    emblaApi.scrollNext();
  };
  prevBtn.addEventListener("click", scrollPrev, false);
  nextBtn.addEventListener("click", scrollNext, false);

  const removeTogglePrevNextBtnsActive =
    pricesSliderAddTogglePrevNextBtnsActive(emblaApi, prevBtn, nextBtn);

  return () => {
    removeTogglePrevNextBtnsActive();
    prevBtn.removeEventListener("click", scrollPrev, false);
    nextBtn.removeEventListener("click", scrollNext, false);
  };
};

const pricesSliderAddDotBtnsAndClickHandlers = (emblaApi, dotsNode) => {
  let dotNodes = [];

  const addDotBtnsWithClickHandlers = () => {
    dotsNode.innerHTML = emblaApi
      .scrollSnapList()
      .map(
        () =>
          '<button class="embla__dot prices-embla__dot" type="button"></button>',
      )
      .join("");

    const scrollTo = (index) => {
      emblaApi.scrollTo(index);
    };

    dotNodes = Array.from(dotsNode.querySelectorAll(".prices-embla__dot"));
    dotNodes.forEach((dotNode, index) => {
      dotNode.addEventListener("click", () => scrollTo(index), false);
    });
  };

  const toggleDotBtnsActive = () => {
    const previous = emblaApi.previousScrollSnap();
    const selected = emblaApi.selectedScrollSnap();
    dotNodes[previous].classList.remove("embla__dot--selected");
    dotNodes[selected].classList.add("embla__dot--selected");
  };

  emblaApi
    .on("init", addDotBtnsWithClickHandlers)
    .on("reInit", addDotBtnsWithClickHandlers)
    .on("init", toggleDotBtnsActive)
    .on("reInit", toggleDotBtnsActive)
    .on("select", toggleDotBtnsActive);

  return () => {
    dotsNode.innerHTML = "";
  };
};

const pricesSliderRemovePrevNextBtnsClickHandlers =
  pricesSliderAddPrevNextBtnsClickHandlers(
    pricesSliderEmblaApi,
    pricesSliderPrevBtnNode,
    pricesSliderNextBtnNode,
  );
const pricesSliderRemoveDotBtnsAndClickHandlers =
  pricesSliderAddDotBtnsAndClickHandlers(
    pricesSliderEmblaApi,
    pricesSliderDotsNode,
  );

pricesSliderEmblaApi.on("destroy", pricesSliderRemovePrevNextBtnsClickHandlers);
pricesSliderEmblaApi.on("destroy", pricesSliderRemoveDotBtnsAndClickHandlers);
