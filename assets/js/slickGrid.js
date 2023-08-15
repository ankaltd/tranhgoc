jQuery(document).ready(function ($) {
  // Sử dụng document.getElementById để truy cập đến phần tử input kiểu hidden

  // Tạo một hàm để gọi các hàm cần thiết => SLIDER Solution
  var giaTri_solution = $("#totalSliderSolution").val() - 1;

  $(".wep_home_solution__slick")
    .slick({
      centerMode: false,
      centerPadding: "0",
      slidesToShow: giaTri_solution,
      prevArrow: '<button type="button" class="slick-prev"></button>',
      nextArrow: '<button type="button" class="slick-next"></button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: false,
            centerPadding: "0",
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: false,
            centerPadding: "0",
            slidesToShow: 1,
          },
        },
      ],
    })
    .on("setPosition", function (event, slick) {
      slick.$slides.css("height", slick.$slideTrack.height() + "px");
    });

  // Tạo một hàm để gọi các hàm cần thiết => SLIDER BOD
  var giaTri_bod = $("#totalSliderBOD").val();

  $(".wep_bod_slick")
    .slick({
      centerMode: false,
      centerPadding: "0",
      slidesToShow: giaTri_bod,
      prevArrow: '<button type="button" class="slick-prev"></button>',
      nextArrow: '<button type="button" class="slick-next"></button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: false,
            centerPadding: "0",
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: false,
            centerPadding: "0",
            slidesToShow: 1,
          },
        },
      ],
    })
    .on("setPosition", function (event, slick) {
      slick.$slides.css("height", slick.$slideTrack.height() + "px");
    });

  // Tạo một hàm để gọi các hàm cần thiết => SLIDER HISTORY
  var giaTri_history = $("#totalSliderHistory").val();

  $(".wep_history_slick")
    .slick({
      centerMode: false,
      centerPadding: "0",
      slidesToShow: giaTri_history,
      prevArrow: '<button type="button" class="slick-prev"></button>',
      nextArrow: '<button type="button" class="slick-next"></button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: false,
            centerPadding: "0",
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: false,
            centerPadding: "0",
            slidesToShow: 1,
          },
        },
      ],
    })
    .on("setPosition", function (event, slick) {
      slick.$slides.css("height", slick.$slideTrack.height() + "px");
    });
});
