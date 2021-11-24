"use strict";

window.addEventListener('load', function() {


//------------------------------------------------------------------------
//						OWL CAROUSEL OPTIONS
//------------------------------------------------------------------------

$('.carousel-categorys').owlCarousel({
    loop: false,
    margin: 30,
    nav: true,
    navText: ['', ''],
    dotsEach: true,
    autoplay: true,
    autoplayHoverPause: true,
    rewind: true,
    startPosition: 1,
    stagePadding: 0,
    responsive: {
        0: {
            items: 4
        },
        700: {
            items: 6
        },
        1200: {
            items: 9
        },
        1600: {
            items: 14
        }
    }

});


});
