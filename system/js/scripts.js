(function () {

    // Init variables
    var navOpen = false;
    var pageNav = document.querySelector('.page-nav');
    var navEl = document.querySelector('.page-nav nav');
    var navLinks = document.querySelectorAll('.page-nav nav a');
    var navHeight = 40;
    var activeIndex, activeDistance, activeItem, navAnimation, navItemsAnimation;

    // Helper function to get the index of `item`
    function getIndex(item) {
        return Array.prototype.indexOf.call(item.parentNode.children, item);
    }

    // This translate the nav element to show the selected item
    function translateNav(item) {
        // If animation is defined, pause it
        if (navItemsAnimation) navItemsAnimation.pause();
        // Animate the `translateY` of `nav` to show only the current link
        navItemsAnimation = anime({
            targets: navEl,
            translateY: (item ? -activeIndex * navHeight : 0) + 'px',
            easing: 'easeOutCubic',
            duration: 500
        });
    }

    // Init Smooth Scroll
    smoothScroll.init({
        // This `offset` is the `height` of fixed header
        offset: -80
    });

    // Init Gumshoe
    gumshoe.init({
        // The callback is triggered after setting the active link, to show it as active in the `nav`
        callback: function (nav) {
            // Check if active link has changed
            if (activeDistance !== nav.distance) {
                // Update states
                activeDistance = nav.distance;
                activeItem = nav.nav;
                activeIndex = getIndex(activeItem);
                // Translate `nav` to show the active link, or close it
                if (navOpen) {
                    closeNav();
                } else {
                    translateNav(activeItem);
                }
            }
        }
    });

})();