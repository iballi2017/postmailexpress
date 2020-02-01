$(document).ready(function(){
    // alert("hello");

    $(".hero-text-slider").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(".pme-carousel").owlCarousel({
        loop:true,
        autoplay: true,
        autoplayTimeout: 10000,
        fluidSpeed: 1,
        lazyLoad: true,
        // slideSpeed : 10000,
        autoplaySpeed: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(".customers-reviews-slider").owlCarousel({
        loop:true,
        autoplay: false,
        dots: true,
        autoplayTimeout: 10000,
        fluidSpeed: 1,
        // slideSpeed : 10000,
        autoplaySpeed: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
})