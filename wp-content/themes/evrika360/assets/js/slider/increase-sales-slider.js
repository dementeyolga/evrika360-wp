(function () {
  const increaseSalesSliderOptions = { align: "start", loop: true };

  const increaseSalesSliderEmblaNode = document.querySelector(
    ".increase-sales-embla",
  );
  const increaseSalesSliderViewportNode =
    increaseSalesSliderEmblaNode?.querySelector(
      ".increase-sales-embla__viewport",
    );
  const increaseSalesSliderPrevBtnNode =
    increaseSalesSliderEmblaNode?.querySelector(
      ".increase-sales-embla__button--prev",
    );
  const increaseSalesSliderNextBtnNode =
    increaseSalesSliderEmblaNode?.querySelector(
      ".increase-sales-embla__button--next",
    );
  const increaseSalesSliderDotsNode =
    increaseSalesSliderEmblaNode?.querySelector(".increase-sales-embla__dots");

  if (increaseSalesSliderViewportNode && increaseSalesSliderOptions) {
    const increaseSalesSliderEmblaApi = EmblaCarousel(
      increaseSalesSliderViewportNode,
      increaseSalesSliderOptions,
    );

    const increaseSalesSliderAddTogglePrevNextBtnsActive = (
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

    const increaseSalesSliderAddPrevNextBtnsClickHandlers = (
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
          increaseSalesSliderAddTogglePrevNextBtnsActive(
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

    const increaseSalesSliderAddDotBtnsAndClickHandlers = (
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
                '<button class="embla__dot increase-sales-embla__dot" type="button"></button>',
            )
            .join("");

          const scrollTo = (index) => {
            emblaApi.scrollTo(index);
          };

          dotNodes = Array.from(
            dotsNode.querySelectorAll(".increase-sales-embla__dot"),
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

    const increaseSalesSliderRemovePrevNextBtnsClickHandlers =
      increaseSalesSliderAddPrevNextBtnsClickHandlers(
        increaseSalesSliderEmblaApi,
        increaseSalesSliderPrevBtnNode,
        increaseSalesSliderNextBtnNode,
      );
    const increaseSalesSliderRemoveDotBtnsAndClickHandlers =
      increaseSalesSliderAddDotBtnsAndClickHandlers(
        increaseSalesSliderEmblaApi,
        increaseSalesSliderDotsNode,
      );

    increaseSalesSliderEmblaApi?.on(
      "destroy",
      increaseSalesSliderRemovePrevNextBtnsClickHandlers,
    );
    increaseSalesSliderEmblaApi?.on(
      "destroy",
      increaseSalesSliderRemoveDotBtnsAndClickHandlers,
    );
  }
})();
