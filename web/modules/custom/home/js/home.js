(function ($, Drupal) {
  Drupal.behaviors.caseStudySwiper = {
    attach: function (context, settings) {
      // Prevent double initialization
      if (context.initialized) return;
      context.initialized = true;

      const swiper = new Swiper('.case-study-slider', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          768: { slidesPerView: 2 },
          1024: { slidesPerView: 3 }
        }
      });
    }
  };
})(jQuery, Drupal);