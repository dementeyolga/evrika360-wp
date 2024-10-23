const automatizationTabsSliderOptions = { align: "start", loop: false };

const automatizationTabsSliderEmblaNode = document.querySelector(
  ".automatization-tabs-embla",
);
const automatizationTabsSliderViewportNode =
  automatizationTabsSliderEmblaNode.querySelector(
    ".automatization-tabs-embla__viewport",
  );

const automatizationTabsSliderEmblaApi = EmblaCarousel(
  automatizationTabsSliderViewportNode,
  automatizationTabsSliderOptions,
);
