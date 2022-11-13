$(document).ready(function () {
    $(".slider-for").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      dots: false,
     
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
  
  
  
  