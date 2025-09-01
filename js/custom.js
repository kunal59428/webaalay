// jQuery for menu toggle and smooth scrolling
        jQuery(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('.mobile-menu').toggleClass('active');
            });
            
            $('.close-menu').click(function(){
                $('.mobile-menu').removeClass('active');
            });
            
            $('.mobile-menu ul li a').click(function(){
                $('.mobile-menu').removeClass('active');
            });
            
            $('.hire-btn').click(function(){
                $('#hireForm').fadeIn();
            });
            
            $('.close-form').click(function(){
                $('#hireForm').fadeOut();
            });
            
            // Close popup when clicking outside
            $(window).click(function(e) {
                if ($(e.target).hasClass('popup-form')) {
                    $('#hireForm').fadeOut();
                }
            });
            
            // Testimonial slider
            $('.testimonial-dot').click(function(){
                var index = $(this).data('index');
                $('.testimonial').removeClass('active');
                $('.testimonial').eq(index).addClass('active');
                $('.testimonial-dot').removeClass('active');
                $(this).addClass('active');
            });
            
            // Fixed lazy loading implementation
        function lazyLoad() {
            const lazyImages = document.querySelectorAll('.lazy-load');
            
            // Check if Intersection Observer is supported
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src;
                            img.classList.add('loaded');
                            imageObserver.unobserve(img);
                        }
                    });
                }, {
                    rootMargin: '0px 0px 100px 0px' // Load images 100px before they enter viewport
                });
                
                lazyImages.forEach(img => {
                    imageObserver.observe(img);
                });
            } else {
                // Fallback for browsers that don't support Intersection Observer
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                });
            }
        }

        // Wait for DOM to be fully loaded before initializing lazy loading
        document.addEventListener('DOMContentLoaded', lazyLoad);
        
        // Also initialize when window is fully loaded (as a backup)
        window.addEventListener('load', lazyLoad);


         $('.filter-btn').on('click', function(){
                // Remove active class from all buttons
                $('.filter-btn').removeClass('active');
                // Add active class to clicked button
                $(this).addClass('active');
                
                // Get filter value
                const filter = $(this).data('filter');
                
                // Show all items if filter is 'all'
                if (filter === 'all') {
                    $('.portfolio-item').fadeIn(500);
                } else {
                    // Hide all items
                    $('.portfolio-item').hide();
                    // Show items with matching category
                    $(`.portfolio-item[data-category*="${filter}"]`).fadeIn(500);
                }
            });

          
            
        });
        // JavaScript for enhanced functionality


document.addEventListener('DOMContentLoaded', function() {
    // =========================
    // Cookie preferences functionality
    // =========================
    const saveButton = document.getElementById('save-preferences');
    if (saveButton) {   // check exists
        saveButton.addEventListener('click', function() {
            const performance = document.getElementById('performance-cookies')?.checked;
            const functional = document.getElementById('functional-cookies')?.checked;
            const targeting = document.getElementById('targeting-cookies')?.checked;
            
            alert(
                `Cookie preferences saved!\n\n` +
                `Performance Cookies: ${performance ? 'Enabled' : 'Disabled'}\n` +
                `Functional Cookies: ${functional ? 'Enabled' : 'Disabled'}\n` +
                `Targeting Cookies: ${targeting ? 'Enabled' : 'Disabled'}`
            );
        });
    }

    // =========================
    // FAQ toggle functionality
    // =========================
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            if (!answer) return;

            answer.classList.toggle('active');
            
            const icon = question.querySelector('i');
            if (icon) {
                if (answer.classList.contains('active')) {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            }
        });
    });

    // =========================
    // Mega menu functionality
    // =========================
    const megaMenus = document.querySelectorAll('.mega-menu');
    const hasMegaMenuItems = document.querySelectorAll('.has-mega-menu');
    
    // Close mega menus when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.has-mega-menu')) {
            megaMenus.forEach(menu => {
                menu.style.opacity = '0';
                menu.style.visibility = 'hidden';
                menu.style.transform = 'translateY(10px)';
            });
        }
    });
    
    // Touch device support
    hasMegaMenuItems.forEach(item => {
        item.addEventListener('touchstart', function(e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                const menu = this.querySelector('.mega-menu');
                const isOpen = menu.style.visibility === 'visible';
                
                // Close all menus first
                megaMenus.forEach(m => {
                    m.style.opacity = '0';
                    m.style.visibility = 'hidden';
                    m.style.transform = 'translateY(10px)';
                });
                
                // Open this menu if it was closed
                if (!isOpen) {
                    menu.style.opacity = '1';
                    menu.style.visibility = 'visible';
                    menu.style.transform = 'translateY(0)';
                }
            }
        });
    });
    
    // Keyboard navigation support
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            megaMenus.forEach(menu => {
                menu.style.opacity = '0';
                menu.style.visibility = 'hidden';
                menu.style.transform = 'translateY(10px)';
            });
        }
    });
});

