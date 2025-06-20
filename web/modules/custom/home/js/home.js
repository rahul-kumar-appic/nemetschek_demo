(function ($, Drupal) {
  Drupal.behaviors.customSwiperBehavior = {
    attach: function (context, settings) {


      
        // Initialize tab navigation swiper
        const tabSwiper = new Swiper('.tabSwiper', {
            slidesPerView: 'auto',
            spaceBetween: 0,
            freeMode: true,
            autoPlay: true,
            loop: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: '.tab-navigation .swiper-button-next',
                prevEl: '.tab-navigation .swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 'auto',
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 'auto',
                    spaceBetween: 0,
                }
            }
        });

        // Initialize content swiper
        const contentSwiper = new Swiper('.contentSwiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 600,
            autoPlay: true,
            loop: true,
            allowTouchMove: false, // Disable touch/swipe on content
            on: {
                slideChange: function () {
                    updateActiveTab(this.activeIndex);
                }
            }
        });

        // Handle tab clicks
        // (Tab click functionality is now integrated above)

        function updateActiveTab(activeIndex) {
            // Remove active class from all tabs
            document.querySelectorAll('.slide-bar').forEach(tab => {
                tab.classList.remove('active');
                tab.setAttribute('aria-selected', 'false');
                tab.setAttribute('tabindex', '-1');
            });

            // Add active class to current tab
            const activeTab = document.querySelector(`.slide-bar[data-index="${activeIndex}"]`);
            if (activeTab) {
                activeTab.classList.add('active');
                activeTab.setAttribute('aria-selected', 'true');
                activeTab.setAttribute('tabindex', '0');
                
                // Center the active tab in view
                const tabIndex = Array.from(document.querySelectorAll('.slide-bar')).indexOf(activeTab);
                tabSwiper.slideTo(Math.max(0, tabIndex - 1));
            }
        }

        // Initialize with third tab active (index 2)
        setTimeout(() => {
            contentSwiper.slideTo(0);
            updateActiveTab(0);
        }, 100);

        // Auto-advance functionality with continuous progress animation
        let progressInterval;
        const SLIDE_DURATION = 4000; // 4 seconds per slide
        
        function startAutoAdvance() {
            let progress = 0;
            const progressStep = 100 / (SLIDE_DURATION / 50); // Update every 50ms
            
            // Clear any existing intervals
            clearInterval(progressInterval);
            
            // Animate progress bar
            progressInterval = setInterval(() => {
                progress += progressStep;
                
                // Update active tab's progress bar
                const activeTab = document.querySelector('.slide-bar.active');
                if (activeTab) {
                    const progressBar = activeTab.querySelector('.progress-bar-slide');
                    progressBar.style.width = Math.min(progress, 100) + '%';
                }
                
                // When progress reaches 100%, advance to next slide
                if (progress >= 100) {
                    clearInterval(progressInterval);
                    const currentIndex = contentSwiper.activeIndex;
                    const nextIndex = (currentIndex + 1) % 4;
                    contentSwiper.slideTo(nextIndex);
                    
                    // Reset progress and continue immediately
                    setTimeout(() => {
                        startAutoAdvance();
                    }, 300);
                }
            }, 50);
        }

        function resetProgress() {
            // Reset all progress bars
            document.querySelectorAll('.progress-bar-slide').forEach(bar => {
                bar.style.width = '0%';
            });
            
            // Set active tab progress to 100%
            const activeTab = document.querySelector('.slide-bar.active');
            if (activeTab) {
                const progressBar = activeTab.querySelector('.progress-bar-slide');
                progressBar.style.width = '100%';
            }
        }

        // Start continuous auto-advance
        setTimeout(() => {
            resetProgress();
            startAutoAdvance();
        }, 500);

        // Handle manual tab clicks - restart timer but keep autoplay going
        document.querySelectorAll('.slide-bar').forEach((tab, index) => {
            tab.addEventListener('click', () => {
                clearInterval(progressInterval);
                contentSwiper.slideTo(index);
                updateActiveTab(index);
                resetProgress();
                setTimeout(() => {
                    startAutoAdvance();
                }, 100);
            });
        });

    }
  };
})(jQuery, Drupal);