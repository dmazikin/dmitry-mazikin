const swiper = new Swiper(".swiper-present", {
  effect: "cube",
  grabCursor: true,
  slidesPerView: 1,
  autoHeight: false,
  cubeEffect: {
    shadow: false,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 2,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
