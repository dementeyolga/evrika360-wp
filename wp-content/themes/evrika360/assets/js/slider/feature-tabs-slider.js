const featureTabsSliderOptions = { align: "start", loop: false };

const featureTabsSliderEmblaNode = document.querySelector(
  ".feature-tabs-embla",
);
const featureTabsSliderViewportNode = featureTabsSliderEmblaNode.querySelector(
  ".feature-tabs-embla__viewport",
);

const featureTabsSliderEmblaApi = EmblaCarousel(
  featureTabsSliderViewportNode,
  featureTabsSliderOptions,
);
