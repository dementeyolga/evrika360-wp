(function () {
  const assessmentTabsSliderOptions = {
    align: "start",
    dragFree: true,
  };

  const assessmentTabsSliderEmblaNode = document.querySelector(
    ".assessment-tabs-embla",
  );
  const assessmentTabsSliderViewportNode =
    assessmentTabsSliderEmblaNode?.querySelector(
      ".assessment-tabs-embla__viewport",
    );

  const assessmentTabs =
    assessmentTabsSliderEmblaNode?.querySelectorAll(".tab");

  if (assessmentTabsSliderViewportNode && assessmentTabsSliderOptions) {
    const assessmentTabsSliderEmblaApi = EmblaCarousel(
      assessmentTabsSliderViewportNode,
      assessmentTabsSliderOptions,
    );

    assessmentTabs?.forEach((tab, index) =>
      tab?.addEventListener("click", () => {
        assessmentTabsSliderEmblaApi?.scrollTo(index);
      }),
    );
  }
})();
