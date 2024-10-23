const deptSliderOptions = { align: "start", loop: true };

const deptSliderEmblaNode = document.querySelector(".dept-embla");
const deptSliderViewportNode = deptSliderEmblaNode.querySelector(
  ".dept-embla__viewport",
);
const deptSliderPrevBtnNode = deptSliderEmblaNode.querySelector(
  ".dept-embla__button--prev",
);
const deptSliderNextBtnNode = deptSliderEmblaNode.querySelector(
  ".dept-embla__button--next",
);
const deptSliderDotsNode =
  deptSliderEmblaNode.querySelector(".dept-embla__dots");

const deptSliderPlugins = [EmblaCarouselAutoHeight()];

const deptSliderEmblaApi = EmblaCarousel(
  deptSliderViewportNode,
  deptSliderOptions,
  deptSliderPlugins,
);

const deptSliderAddTogglePrevNextBtnsActive = (emblaApi, prevBtn, nextBtn) => {
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

const deptSliderAddPrevNextBtnsClickHandlers = (emblaApi, prevBtn, nextBtn) => {
  const scrollPrev = () => {
    emblaApi.scrollPrev();
  };
  const scrollNext = () => {
    emblaApi.scrollNext();
  };
  prevBtn.addEventListener("click", scrollPrev, false);
  nextBtn.addEventListener("click", scrollNext, false);

  const removeTogglePrevNextBtnsActive = deptSliderAddTogglePrevNextBtnsActive(
    emblaApi,
    prevBtn,
    nextBtn,
  );

  return () => {
    removeTogglePrevNextBtnsActive();
    prevBtn.removeEventListener("click", scrollPrev, false);
    nextBtn.removeEventListener("click", scrollNext, false);
  };
};

const deptSliderAddDotBtnsAndClickHandlers = (emblaApi, dotsNode) => {
  let dotNodes = [];

  const addDotBtnsWithClickHandlers = () => {
    dotsNode.innerHTML = emblaApi
      .scrollSnapList()
      .map(
        () =>
          '<button class="embla__dot dept-embla__dot" type="button"></button>',
      )
      .join("");

    const scrollTo = (index) => {
      emblaApi.scrollTo(index);
    };

    dotNodes = Array.from(dotsNode.querySelectorAll(".dept-embla__dot"));
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

const deptSliderRemovePrevNextBtnsClickHandlers =
  deptSliderAddPrevNextBtnsClickHandlers(
    deptSliderEmblaApi,
    deptSliderPrevBtnNode,
    deptSliderNextBtnNode,
  );
const deptSliderRemoveDotBtnsAndClickHandlers =
  deptSliderAddDotBtnsAndClickHandlers(deptSliderEmblaApi, deptSliderDotsNode);

deptSliderEmblaApi.on("destroy", deptSliderRemovePrevNextBtnsClickHandlers);
deptSliderEmblaApi.on("destroy", deptSliderRemoveDotBtnsAndClickHandlers);
