/**
 * @file
 * BIM Landing page JavaScript functionality.
 */
(function ($, Drupal, drupalSettings) {
  'use strict';
  
  /**
   * BIM Landing page behavior.
   */
  Drupal.behaviors.bimLanding = {
    attach: function (context, settings) {
      // Only attach to the document body to avoid multiple attachments
      if (context !== document) {
        return;
      }
      
      console.log('BIM Landing behavior attached');
      console.log('drupalSettings:', drupalSettings);
      
      // Check if elements exist
      var $tabs = $('.product-tabs .tab');
      var $grid = $('#products-grid');
      
      console.log('Found tabs:', $tabs.length);
      console.log('Found grid:', $grid.length);
      
      if ($tabs.length === 0) {
        console.error('No tabs found! Check your HTML structure.');
        return;
      }
      
      if ($grid.length === 0) {
        console.error('No products grid found! Make sure #products-grid exists.');
        return;
      }
      
      // Check if drupalSettings exists
      if (!drupalSettings || !drupalSettings.bimLanding || !drupalSettings.bimLanding.ajaxUrl) {
        console.error('drupalSettings.bimLanding.ajaxUrl not found!');
        console.log('Available drupalSettings:', drupalSettings);
        return;
      }
      
      // Remove any existing click handlers and add new ones
      $tabs.off('click.bimLanding').on('click.bimLanding', function(e) {
        e.preventDefault();
        console.log('Tab clicked!');
        
        var $tab = $(this);
        var series = $tab.data('series');
        
        console.log('Clicked tab series:', series);
        console.log('AJAX URL will be:', drupalSettings.bimLanding.ajaxUrl + '/' + series);
       
        // Update active tab
        $tabs.removeClass('active');
        $tab.addClass('active');
       
        // Show loading state
        $grid.addClass('loading');
       
        // Make AJAX request
        $.ajax({
          url: drupalSettings.bimLanding.ajaxUrl + '/' + series,
          type: 'GET',
          dataType: 'json',
          success: function(response) {
            console.log('AJAX Success:', response);
            if (response.success) {
              updateProductGrid(response.products);
            } else {
              console.error('AJAX returned success: false', response);
            }
          },
          error: function(xhr, status, error) {
            console.error('AJAX Error:', error);
            console.error('Status:', status);
            console.error('Response Text:', xhr.responseText);
            console.error('Status Code:', xhr.status);
          },
          complete: function() {
            $grid.removeClass('loading');
          }
        });
      });
     
      // Smooth scroll for CTA button
      $('.cta-button').off('click.bimLanding').on('click.bimLanding', function(e) {
        var href = $(this).attr('href');
        if (href && href.startsWith('#')) {
          e.preventDefault();
          var target = $(href);
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top - 80
            }, 800);
          }
        }
      });
    }
  };
  
  /**
   * Update the products grid with new data.
   */
  function updateProductGrid(products) {
    var $grid = $('#products-grid');
    var html = '';
   
    $.each(products, function(key, product) {
      html += '<div class="product-card">';
      html += '<div class="product-logo">';
      // Fix: Check if logo is an image path or HTML
     
        html += '<img src="' + product.logo + '" alt="' + product.name + ' Logo" />';
      
      html += '</div>';
      html += '<p class="tagline">' + product.tagline + '</p>';
      html += '<p>' + product.description + '</p>';
      if (product.link) {
        html += '<a href="' + product.link + '" class="product-link">';
        html += Drupal.t('Learn More') + ' →</a>';
      }
      html += '</div>';
    });
   
    $grid.html(html);
  }
  
})(jQuery, Drupal, drupalSettings);