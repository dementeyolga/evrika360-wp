const assessmentTabsSliderOptions = { align: "start", loop: false };

const assessmentTabsSliderEmblaNode = document.querySelector(
  ".assessment-tabs-embla",
);
const assessmentTabsSliderViewportNode =
  assessmentTabsSliderEmblaNode.querySelector(
    ".assessment-tabs-embla__viewport",
  );

const assessmentTabsSliderEmblaApi = EmblaCarousel(
  assessmentTabsSliderViewportNode,
  assessmentTabsSliderOptions,
);
