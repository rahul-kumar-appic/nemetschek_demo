(function (Drupal, drupalSettings) {
  'use strict';

  Drupal.behaviors.architectureCarousel = {
    attach: function (context, settings) {
      // Initialize carousel only once per element
      const carousels = context.querySelectorAll('.architecture-case-studies:not(.carousel-processed)');
      
      carousels.forEach(function(carousel) {
        carousel.classList.add('carousel-processed');
        new ArchitectureCarousel(carousel);
      });
    }
  };

  class ArchitectureCarousel {
    constructor(container) {
      this.container = container;
      this.track = container.querySelector('#carousel-track');
      this.prevBtn = container.querySelector('#prev-btn');
      this.nextBtn = container.querySelector('#next-btn');
      this.slides = this.track.querySelectorAll('.carousel-slide');
      
      // Don't initialize if no slides
      if (this.slides.length === 0) return;
      
      this.currentIndex = 0;
      this.slidesToShow = this.getSlidesToShow();
      this.maxIndex = Math.max(0, this.slides.length - this.slidesToShow);
      
      this.init();
      this.bindEvents();
    }
    
    getSlidesToShow() {
      const width = window.innerWidth;
      console.log('caraousel working')
      if (width <= 480) return 1;
      if (width <= 768) return 2;
      if (width <= 1024) return 3;
      return 4;
    }
    
    init() {
      this.updateCarousel();
      this.updateButtons();
    }
    
    bindEvents() {
      if (this.prevBtn) {
        this.prevBtn.addEventListener('click', () => this.prevSlide());
      }
      
      if (this.nextBtn) {
        this.nextBtn.addEventListener('click', () => this.nextSlide());
      }
      
      // Debounced resize handler
      let resizeTimeout;
      window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
          this.slidesToShow = this.getSlidesToShow();
          this.maxIndex = Math.max(0, this.slides.length - this.slidesToShow);
          this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
          this.updateCarousel();
          this.updateButtons();
        }, 250);
      });
      
      // Touch/swipe support
      this.addTouchSupport();
    }
    
    addTouchSupport() {
      let startX = 0;
      let isDragging = false;
      
      this.track.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
      }, { passive: true });
      
      this.track.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
      });
      
      this.track.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        isDragging = false;
        
        const endX = e.changedTouches[0].clientX;
        const diff = startX - endX;
        
        if (Math.abs(diff) > 50) {
          if (diff > 0) {
            this.nextSlide();
          } else {
            this.prevSlide();
          }
        }
      }, { passive: true });
    }
    
    updateCarousel() {
      if (this.slides.length === 0) return;
      
      const slideWidth = this.slides[0].offsetWidth;
      const gap = 20;
      const translateX = -(this.currentIndex * (slideWidth + gap));
      this.track.style.transform = `translateX(${translateX}px)`;
    }
    
    updateButtons() {
      if (this.prevBtn) {
        this.prevBtn.disabled = this.currentIndex === 0;
      }
      if (this.nextBtn) {
        this.nextBtn.disabled = this.currentIndex >= this.maxIndex;
      }
    }
    
    prevSlide() {
      if (this.currentIndex > 0) {
        this.currentIndex--;
        this.updateCarousel();
        this.updateButtons();
      }
    }
    
    nextSlide() {
      if (this.currentIndex < this.maxIndex) {
        this.currentIndex++;
        this.updateCarousel();
        this.updateButtons();
      }
    }
  }

})(Drupal, drupalSettings);