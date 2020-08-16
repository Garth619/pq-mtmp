(function ($) {
  var initializeCaseresultblock = function ($block) {
    $(".client_reviews_block_slider")
      .not(".slick-initialized")
      .slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        adaptiveHeight: true,
        fade: true,
        arrows: false,
        dots: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              fade: false,
              adaptiveHeight: false,
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 1170,
            settings: {
              fade: false,
              dots: false,
              arrows: true,
              adaptiveHeight: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: ".client_reviews_block_arrow_left",
              nextArrow: ".client_reviews_block_arrow_right",
            },
          },
          {
            breakpoint: 1490,
            settings: {
              fade: false,
              dots: false,
              arrows: true,
              adaptiveHeight: false,
              slidesToShow: 2,
              slidesToScroll: 2,
              prevArrow: ".client_reviews_block_arrow_left",
              nextArrow: ".client_reviews_block_arrow_right",
            },
          },
        ],
      });
    function getSlickheight() {
      var stHeight = $(".client_reviews_block_slider .slick-track").height();
      if ($(window).width() < 768) {
        $(".client_reviews_block_slide").css("height", "auto");
      }
      if ($(window).width() >= 768 && $(window).width() < 1170) {
        $(".client_reviews_block_slide").css("height", stHeight + "px");
      }
      if ($(window).width() >= 1170 && $(window).width() < 1490) {
        $(".client_reviews_block_slide").css("height", "auto");
      }
      if ($(window).width() >= 1490) {
        $(".client_reviews_block_slide").css("height", stHeight + "px");
      }
    }

    getSlickheight();

    $(window).resize(
      _.debounce(function () {
        getSlickheight();
      }, 100)
    );
  };

  var initializeCaseresultblockadmin = function ($block) {
    $(".client_reviews_block_slider").not(".slick-initialized").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      mobileFirst: true,
      fade: true,
      arrows: true,
      dots: false,
      prevArrow: ".client_reviews_block_arrow_left",
      nextArrow: ".client_reviews_block_arrow_right",
    });
  };

  // Initialize each block on page load (front end).
  $(document).ready(function () {
    initializeCaseresultblock();
  });

  // Initialize dynamic block preview (editor).
  if (window.acf) {
    window.acf.addAction(
      "render_block_preview",
      initializeCaseresultblockadmin
    );
  }
})(jQuery);
