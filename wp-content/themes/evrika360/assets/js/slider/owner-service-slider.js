(function () {
  const ownerServiceSliderOptions = { align: "start", loop: true };

  const ownerServiceSliderEmblaNode = document.querySelector(
    ".owner-service-embla",
  );
  const ownerServiceSliderViewportNode =
    ownerServiceSliderEmblaNode?.querySelector(
      ".owner-service-embla__viewport",
    );
  const ownerServiceSliderPrevBtnNode =
    ownerServiceSliderEmblaNode?.querySelector(
      ".owner-service-embla__button--prev",
    );
  const ownerServiceSliderNextBtnNode =
    ownerServiceSliderEmblaNode?.querySelector(
      ".owner-service-embla__button--next",
    );
  const ownerServiceSliderDotsNode = ownerServiceSliderEmblaNode?.querySelector(
    ".owner-service-embla__dots",
  );

  if (ownerServiceSliderViewportNode && ownerServiceSliderOptions) {
    const ownerServiceSliderEmblaApi = EmblaCarousel(
      ownerServiceSliderViewportNode,
      ownerServiceSliderOptions,
    );

    const ownerServiceSliderAddTogglePrevNextBtnsActive = (
      emblaApi,
      prevBtn,
      nextBtn,
    ) => {
      if (emblaApi && prevBtn && nextBtn) {
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
      }
    };

    const ownerServiceSliderAddPrevNextBtnsClickHandlers = (
      emblaApi,
      prevBtn,
      nextBtn,
    ) => {
      if (emblaApi && prevBtn && nextBtn) {
        const scrollPrev = () => {
          emblaApi.scrollPrev();
        };
        const scrollNext = () => {
          emblaApi.scrollNext();
        };
        prevBtn.addEventListener("click", scrollPrev, false);
        nextBtn.addEventListener("click", scrollNext, false);

        const removeTogglePrevNextBtnsActive =
          ownerServiceSliderAddTogglePrevNextBtnsActive(
            emblaApi,
            prevBtn,
            nextBtn,
          );

        return () => {
          removeTogglePrevNextBtnsActive();
          prevBtn.removeEventListener("click", scrollPrev, false);
          nextBtn.removeEventListener("click", scrollNext, false);
        };
      }
    };

    const ownerServiceSliderAddDotBtnsAndClickHandlers = (
      emblaApi,
      dotsNode,
    ) => {
      if (emblaApi && dotsNode) {
        let dotNodes = [];

        const addDotBtnsWithClickHandlers = () => {
          dotsNode.innerHTML = emblaApi
            .scrollSnapList()
            .map(
              () =>
                '<button class="embla__dot owner-service-embla__dot" type="button"></button>',
            )
            .join("");

          const scrollTo = (index) => {
            emblaApi.scrollTo(index);
          };

          dotNodes = Array.from(
            dotsNode.querySelectorAll(".owner-service-embla__dot"),
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
      }
    };

    const ownerServiceSliderRemovePrevNextBtnsClickHandlers =
      ownerServiceSliderAddPrevNextBtnsClickHandlers(
        ownerServiceSliderEmblaApi,
        ownerServiceSliderPrevBtnNode,
        ownerServiceSliderNextBtnNode,
      );
    const ownerServiceSliderRemoveDotBtnsAndClickHandlers =
      ownerServiceSliderAddDotBtnsAndClickHandlers(
        ownerServiceSliderEmblaApi,
        ownerServiceSliderDotsNode,
      );

    ownerServiceSliderEmblaApi?.on(
      "destroy",
      ownerServiceSliderRemovePrevNextBtnsClickHandlers,
    );
    ownerServiceSliderEmblaApi?.on(
      "destroy",
      ownerServiceSliderRemoveDotBtnsAndClickHandlers,
    );
  }
})();
