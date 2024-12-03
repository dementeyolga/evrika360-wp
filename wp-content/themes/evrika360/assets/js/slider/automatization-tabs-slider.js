(function () {
  const automatizationTabsSliderOptions = { align: "start", dragFree: true };

  const automatizationTabsSliderEmblaNode = document.querySelector(
    ".automatization-tabs-embla",
  );
  const automatizationTabsSliderViewportNode =
    automatizationTabsSliderEmblaNode?.querySelector(
      ".automatization-tabs-embla__viewport",
    );

  const automatizationTabs =
    automatizationTabsSliderEmblaNode?.querySelectorAll(".tab");

  if (automatizationTabsSliderViewportNode && automatizationTabsSliderOptions) {
    const automatizationTabsSliderEmblaApi = EmblaCarousel(
      automatizationTabsSliderViewportNode,
      automatizationTabsSliderOptions,
    );

    automatizationTabs?.forEach((tab, index) =>
      tab?.addEventListener("click", () => {
        automatizationTabsSliderEmblaApi?.scrollTo(index);
      }),
    );
  }
})();
