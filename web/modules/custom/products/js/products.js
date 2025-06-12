/**
 * @file
 * Products module JavaScript functionality.
 */

(function ($, Drupal) {
  'use strict';

  /**
   * Products behavior for interactive elements.
   */
  Drupal.behaviors.products = {
    attach: function (context, settings) {
      
      // Video thumbnail click handler
      $('.video-thumbnail', context)
        .once('products-video')
        .on('click', function(e) {
          e.preventDefault();
          
          // Get video URL from data attribute or implement modal
          const videoUrl = $(this).data('video-url');
          
          if (videoUrl) {
            // Open video in modal or redirect
            window.open(videoUrl, '_blank');
          } else {
            // Placeholder for video modal functionality
            console.log('Video clicked - implement modal or redirect');
          }
        });

      // Smooth scroll for CTA buttons
      $('.cta-button', context)
        .once('products-cta')
        .on('click', function(e) {
          const href = $(this).attr('href');
          
          // If it's an anchor link, smooth scroll
          if (href && href.startsWith('#')) {
            e.preventDefault();
            
            const target = $(href);
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top - 80
              }, 800);
            }
          }
        });

      // Animate elements on scroll
      if (typeof IntersectionObserver !== 'undefined') {
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('animate-in');
            }
          });
        }, {
          threshold: 0.1,
          rootMargin: '0px 0px -50px 0px'
        });

        // Observe content sections
        $('.content-text, .content-video', context).each(function() {
          if (!$(this).hasClass('observed')) {
            observer.observe(this);
            $(this).addClass('observed');
          }
        });
      }

      // Add loading states for images
      $('.banner-image img, .video-thumbnail img', context)
        .once('products-images')
        .on('load', function() {
          $(this).parent().addClass('image-loaded');
        });

              // FAQ Accordion enhancements
      $('.accordion-button', context)
        .once('products-faq')
        .on('click', function() {
          // Custom accordion behavior if needed
          const $this = $(this);
          const isCollapsed = $this.hasClass('collapsed');
          
          // Add analytics or custom behavior here
          if (!isCollapsed) {
            console.log('FAQ opened:', $this.text().trim());
          }
        });

    }
  };

})(jQuery, Drupal);