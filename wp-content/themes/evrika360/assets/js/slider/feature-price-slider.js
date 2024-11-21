const featurePriceSliderOptions = { align: "start", dragFree: true };

const featurePriceSliderEmblaNode = document.querySelector(
  ".feature-price-embla",
);
const featurePriceSliderViewportNode =
  featurePriceSliderEmblaNode.querySelector(".feature-price-embla__viewport");
const featurePriceSliderPrevBtnNode = featurePriceSliderEmblaNode.querySelector(
  ".feature-price-embla__button--prev",
);
const featurePriceSliderNextBtnNode = featurePriceSliderEmblaNode.querySelector(
  ".feature-price-embla__button--next",
);
const featurePriceSliderDotsNode = featurePriceSliderEmblaNode.querySelector(
  ".feature-price-embla__dots",
);

const featurePriceSliderEmblaApi = EmblaCarousel(
  featurePriceSliderViewportNode,
  featurePriceSliderOptions,
);

const featurePriceSliderAddTogglePrevNextBtnsActive = (
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

const featurePriceSliderAddPrevNextBtnsClickHandlers = (
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
    featurePriceSliderAddTogglePrevNextBtnsActive(emblaApi, prevBtn, nextBtn);

  return () => {
    removeTogglePrevNextBtnsActive();
    prevBtn.removeEventListener("click", scrollPrev, false);
    nextBtn.removeEventListener("click", scrollNext, false);
  };
};

const featurePriceSliderAddDotBtnsAndClickHandlers = (emblaApi, dotsNode) => {
  let dotNodes = [];

  const addDotBtnsWithClickHandlers = () => {
    dotsNode.innerHTML = emblaApi
      .scrollSnapList()
      .map(
        () =>
          '<button class="embla__dot feature-price-embla__dot" type="button"></button>',
      )
      .join("");

    const scrollTo = (index) => {
      emblaApi.scrollTo(index);
    };

    dotNodes = Array.from(
      dotsNode.querySelectorAll(".feature-price-embla__dot"),
    );
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

const featurePriceSliderRemovePrevNextBtnsClickHandlers =
  featurePriceSliderAddPrevNextBtnsClickHandlers(
    featurePriceSliderEmblaApi,
    featurePriceSliderPrevBtnNode,
    featurePriceSliderNextBtnNode,
  );
const featurePriceSliderRemoveDotBtnsAndClickHandlers =
  featurePriceSliderAddDotBtnsAndClickHandlers(
    featurePriceSliderEmblaApi,
    featurePriceSliderDotsNode,
  );

featurePriceSliderEmblaApi.on(
  "destroy",
  featurePriceSliderRemovePrevNextBtnsClickHandlers,
);
featurePriceSliderEmblaApi.on(
  "destroy",
  featurePriceSliderRemoveDotBtnsAndClickHandlers,
);
