(function ($, Drupal) {
  Drupal.behaviors.caseStudySwiper = {
    attach: function (context, settings) {
      // Prevent double initialization
      if (context.initialized) return;
      context.initialized = true;

      const swiper1 = new Swiper('.case-study-slider', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 40,
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
          1024: { slidesPerView: 4 }
        }
      });



      const swiper = new Swiper('.mySwiper2', {
            loop: true,
    
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }
  };
})(jQuery, Drupal);
