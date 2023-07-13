(function ($) {
  AOS.init();

  //slide
  var swiper = new Swiper("#list-slide-inf", {
    slidesPerView: 1,
    loop: true,
    // centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination-inf",
      clickable: true,
    },
  });

  var swiper_slide_home = new Swiper(".slide-home", {
    slidesPerView: 1,
    loop: true,
    // centeredSlides: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination-slide-home",
      clickable: true,
    },
    on: {
      slideChangeTransitionStart: function () {
        $(
          ".content-slide-item h5, .content-slide-item h3, .content-slide-item .cta-slide"
        ).hide(0);
        $(
          ".content-slide-item h5, .content-slide-item h3, .content-slide-item .cta-slide"
        )
          .removeClass("aos-init")
          .removeClass("aos-animate");
      },
      slideChangeTransitionEnd: function () {
        $(
          ".content-slide-item h5, .content-slide-item h3, .content-slide-item .cta-slide"
        ).show(0);
        AOS.init();
      },
    },
  });

  //bbt
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#scroll").css({ visibility: "visible", opacity: "1" });
    } else {
      $("#scroll").css({ visibility: "hidden", opacity: "0" });
    }
  });
  $("#scroll").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  $(".list-icon-fixed ul li a").click(function (event) {
    event.preventDefault();
  });

  $(".icon-bar img").click(function () {
    $(".menu-responsive").addClass("show-menu");
  });

  $(".menu-responsive .icon-close").click(function () {
    $(".menu-responsive").removeClass("show-menu");
  });
})(jQuery);
