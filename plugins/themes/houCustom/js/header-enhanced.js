/**
 * Enhanced Header Script
 * Add scroll effects to header
 */

(function() {
    'use strict';
    
    // Add scroll effect to header
    function handleHeaderScroll() {
        const header = document.querySelector('.pkp_structure_head.enhanced-header');
        if (!header) return;
        
        const scrollThreshold = 50;
        
        function updateHeader() {
            if (window.scrollY > scrollThreshold) {
                document.body.classList.add('header-scrolled');
                header.classList.add('scrolled');
            } else {
                document.body.classList.remove('header-scrolled');
                header.classList.remove('scrolled');
            }
        }
        
        // Throttle scroll event for better performance
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    updateHeader();
                    ticking = false;
                });
                ticking = true;
            }
        });
        
        // Initial check
        updateHeader();
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', handleHeaderScroll);
    } else {
        handleHeaderScroll();
    }
})();