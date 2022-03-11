$('.testimonial-slider').slick({
    dots: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 2,
    adaptiveHeight: true,
    lazyLoad: 'ondemand',
    autoplay: true,
    arrows: true,
    responsive: [
    {
      breakpoint: 1280,
      settings: {
        arrows: true,
        slidesToShow: 1
      }
    }
  ],
    prevArrow:"<img class='a-left control-c prev slick-prev' src='assets/plugin/SlickSlider/previous.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='assets/plugin/SlickSlider/next.png'>"
});

