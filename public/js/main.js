function scrollHeader() {
  const nav = document.getElementById("navbar");
  // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
  if (this.scrollY >= 100) navbar.classList.add("scroll-header");
  else nav.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

$(document).ready(function () {
  if ($(".category-carousel").length) {
    var viewedSlider = $(".category-carousel");

    viewedSlider.owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        349: {
          items: 2,
        },
        768: {
          items: 5,
        },
        1000: {
          items: 6,
        },
        1400: {
          items: 9,
          // loop: false,
        },
      },
    });

    if ($(".btn-carousel-prev").length) {
      var prev = $(".btn-carousel-prev");
      prev.on("click", function () {
        viewedSlider.trigger("prev.owl.carousel");
      });
    }

    if ($(".btn-carousel-next").length) {
      var next = $(".btn-carousel-next");
      next.on("click", function () {
        viewedSlider.trigger("next.owl.carousel");
      });
    }
  }
});

$(".password-form").click(function () {
  $(".toggle-password").toggleClass(".uil-eye");
  var input = $($(".toggle-password").attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

// HOMEPAGE CLIENT
$(document).ready(function () {
  if ($(".promo-carousel").length) {
    var viewedSlider = $(".promo-carousel");

    viewedSlider.owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      items: 1,
      margin: 0,
      center: true,
      autoWidth: true,
    });
  }
});

// JOB IMAGE CAROUSEL
$(document).ready(function () {
  if ($(".job-img-carousel").length) {
    var viewedSlider = $(".job-img-carousel");

    viewedSlider.owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      items: 1,
      margin: 0,
      center: true,
    });

    if ($(".btn-carousel-prev").length) {
      var prev = $(".btn-carousel-prev");
      prev.on("click", function () {
        viewedSlider.trigger("prev.owl.carousel");
      });
    }

    if ($(".btn-carousel-next").length) {
      var next = $(".btn-carousel-next");
      next.on("click", function () {
        viewedSlider.trigger("next.owl.carousel");
      });
    }
  }
});

$(".main-carousel").flickity({
  // options
  // cellAlign: "left",
  // contain: true,
  fade: true,
});
