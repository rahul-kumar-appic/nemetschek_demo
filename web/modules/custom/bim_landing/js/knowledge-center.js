/**
 * Knowledge Center functionality
 */
(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.knowledgeCenter = {
    attach: function (context, settings) {
      // Initialize video player functionality
      $('.tutorial-card__play-btn', context).once('knowledge-center').each(function() {
        $(this).on('click', function(e) {
          e.preventDefault();
          var videoUrl = $(this).data('video-url');
          playTutorialVideo(videoUrl);
        });
      });

      // Add smooth scroll for "View all" button
      $('.knowledge-center__footer .btn', context).once('knowledge-center-scroll').on('click', function(e) {
        var href = $(this).attr('href');
        if (href.startsWith('#')) {
          e.preventDefault();
          $('html, body').animate({
            scrollTop: $(href).offset().top - 100
          }, 800);
        }
      });
    }
  };

  /**
   * Play tutorial video
   */
  function playTutorialVideo(videoUrl) {
    // Option 1: Open in a modal (requires modal library)
    if (typeof Drupal.behaviors.modal !== 'undefined') {
      openVideoModal(videoUrl);
    } 
    // Option 2: Redirect to video page
    else {
      window.location.href = videoUrl;
    }
  }

  /**
   * Open video in modal (if modal system is available)
   */
  function openVideoModal(videoUrl) {
    var modalContent = `
      <div class="video-modal">
        <div class="video-container">
          <iframe src="${videoUrl}" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    `;
    
    // This would integrate with your modal system
    // Example implementation depends on your modal library
    console.log('Opening video modal with URL:', videoUrl);
  }

  /**
   * Lazy load tutorial thumbnails
   */
  Drupal.behaviors.lazyLoadTutorials = {
    attach: function (context, settings) {
      if ('IntersectionObserver' in window) {
        var imageObserver = new IntersectionObserver(function(entries, observer) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              var img = entry.target;
              img.src = img.dataset.src;
              img.classList.remove('lazy');
              imageObserver.unobserve(img);
            }
          });
        });

        $('.tutorial-card__thumbnail.lazy', context).each(function() {
          imageObserver.observe(this);
        });
      }
    }
  };

})(jQuery, Drupal);