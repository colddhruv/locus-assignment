jQuery(document).ready(function () {
  var owl = $(".people-stories-carousel");
  owl.owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
    },
  });
  jQuery(".play").on("click", function () {
    owl.trigger("autoplay.play.owl", [1000]);
  });
  jQuery(".stop").on("click", function () {
    owl.trigger("autoplay.stop.owl");
  });
});
