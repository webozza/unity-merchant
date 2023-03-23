(function ($) {
  "use strict";

  let heroSwiper = () => {
    const slideHeight = $(".um-hero-section .swiper-slide").height();
    $(".um-hero-section .swiper-wrapper").css("height", `${slideHeight}px`);
    const swiper = new Swiper(".um-hero-section .swiper", {
      direction: "vertical",
      speed: 2000,
      autoplay: {
        delay: 2000,
      },
      loop: true,
    });
  };

  let serviceSwiper = () => {
    let serviceWidth = $(".services-container .swiper-slide img").width();
    $(".services-container .swiper-slide").css("width", serviceWidth);
    const swiper = new Swiper(".services-container .swiper", {
      //centeredSlides: "true",
      slidesPerView: "auto",
      spaceBetween: 100,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  };

  let slideArrows = () => {
    $(".um-prev-service").click(function () {
      $(this).parent().find(".swiper-button-prev.hidden").click();
    });
    $(".um-next-service").click(function () {
      $(this).parent().find(".swiper-button-next.hidden").click();
    });
  };

  let hotspotTooltip = () => {
    $(".hotspot-btn").click(function () {
      $(this).parent().toggleClass("hotspot-active");
    });
  };

  let clientSwiper = () => {
    $(".clients-container .swiper-slide").css("width", "225px");
    const swiper = new Swiper(".clients-container .swiper", {
      slidesPerView: "auto",
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 1,
      },
      speed: 2000,
    });
  };

  $(window).load(function () {
    heroSwiper();
    serviceSwiper();
    slideArrows();
    hotspotTooltip();
    clientSwiper();
  });

  // ENDS
})(jQuery);

// Initialize Swiper
// const swiper = new Swiper(".swiper", {
//   speed: 400,
//   spaceBetween: 100,
// });
