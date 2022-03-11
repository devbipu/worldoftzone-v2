$('.owl-carousel.testimonial-carousel').owlCarousel({
    items:2,
    loop:true,
    margin:30,
    responsiveClass:true,
    center: true,
    stagePadding: 30,
    lazyLoad: true,
    autoplay: true,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    animateIn: true,
    animateOut: true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:2,
            nav:true,
            loop:false
        }
    }
})