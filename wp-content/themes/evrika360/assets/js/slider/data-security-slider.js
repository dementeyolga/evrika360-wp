(function () {
  const dataSecuritySliderOptions = { align: "start", loop: true };

  const dataSecuritySliderEmblaNode = document.querySelector(
    ".data-security-embla",
  );
  const dataSecuritySliderViewportNode =
    dataSecuritySliderEmblaNode?.querySelector(
      ".data-security-embla__viewport",
    );
  const dataSecuritySliderPrevBtnNode =
    dataSecuritySliderEmblaNode?.querySelector(
      ".data-security-embla__button--prev",
    );
  const dataSecuritySliderNextBtnNode =
    dataSecuritySliderEmblaNode?.querySelector(
      ".data-security-embla__button--next",
    );
  const dataSecuritySliderDotsNode = dataSecuritySliderEmblaNode?.querySelector(
    ".data-security-embla__dots",
  );

  if (dataSecuritySliderViewportNode && dataSecuritySliderOptions) {
    let dataSecuritySliderEmblaApi = EmblaCarousel(
      dataSecuritySliderViewportNode,
      dataSecuritySliderOptions,
    );

    const dataSecuritySliderAddTogglePrevNextBtnsActive = (
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

    const dataSecuritySliderAddPrevNextBtnsClickHandlers = (
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
          dataSecuritySliderAddTogglePrevNextBtnsActive(
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

    const dataSecuritySliderAddDotBtnsAndClickHandlers = (
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
                '<button class="embla__dot data-security-embla__dot" type="button"></button>',
            )
            .join("");

          const scrollTo = (index) => {
            emblaApi.scrollTo(index);
          };

          dotNodes = Array.from(
            dotsNode.querySelectorAll(".data-security-embla__dot"),
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

    const dataSecuritySliderRemovePrevNextBtnsClickHandlers =
      dataSecuritySliderAddPrevNextBtnsClickHandlers(
        dataSecuritySliderEmblaApi,
        dataSecuritySliderPrevBtnNode,
        dataSecuritySliderNextBtnNode,
      );
    const dataSecuritySliderRemoveDotBtnsAndClickHandlers =
      dataSecuritySliderAddDotBtnsAndClickHandlers(
        dataSecuritySliderEmblaApi,
        dataSecuritySliderDotsNode,
      );

    dataSecuritySliderEmblaApi?.on(
      "destroy",
      dataSecuritySliderRemovePrevNextBtnsClickHandlers,
    );
    dataSecuritySliderEmblaApi?.on(
      "destroy",
      dataSecuritySliderRemoveDotBtnsAndClickHandlers,
    );
  }
})();
