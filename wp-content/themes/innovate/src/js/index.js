import '../css/style.scss';

import $ from "jquery";
import slick from "slick-carousel";


$( document ).ready(function() {
  
  $(".about-slider__wrap").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    vertical: true,
    verticalSwiping: true,
    customPaging : function(slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<a>'+0+(i+1)+'</a>';
    },
    responsive: [
      {
        breakpoint: 992,
        settings: {
          vertical: false,
          verticalSwiping: false,
        }
      }
    ]
  });

  $(".testimonials-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    customPaging : function(slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<span></span>';
    },
    appendDots: $(".testimonials__slider-dots"),
    prevArrow: $(".testimonials-left"),
    nextArrow: $(".testimonials-right")
  });

  $('#nav-icon3').click(function(){
    $(this).toggleClass('open');
    $(".mob-menu").toggleClass('mob-menu__open');
    $("body").toggleClass('overflow-hidden');
	});
});