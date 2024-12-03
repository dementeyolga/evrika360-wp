(function () {
  const featureTabsSliderOptions = { align: "start", dragFree: true };

  const featureTabsSliderEmblaNode = document.querySelector(
    ".feature-tabs-embla",
  );
  const featureTabsSliderViewportNode =
    featureTabsSliderEmblaNode?.querySelector(".feature-tabs-embla__viewport");
  const featureTabs = featureTabsSliderEmblaNode?.querySelectorAll(".tab");

  if (featureTabsSliderViewportNode && featureTabsSliderOptions) {
    const featureTabsSliderEmblaApi = EmblaCarousel(
      featureTabsSliderViewportNode,
      featureTabsSliderOptions,
    );

    featureTabs?.forEach((tab, index) =>
      tab?.addEventListener("click", () => {
        featureTabsSliderEmblaApi?.scrollTo(index);
      }),
    );
  }
})();
