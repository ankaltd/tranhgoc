jQuery(document).ready(function ($) {
  // Sử dụng document.getElementById để truy cập đến phần tử input kiểu hidden

  // Tạo một hàm để gọi các hàm cần thiết => SLIDER SERVER
  var giaTri = $("#totalSlider").val() - 1;

  $(".ssg_home_service__slick").slick({
    centerMode: true,

    centerPadding: "0",

    slidesToShow: giaTri,

    responsive: [
      {
        breakpoint: 1024,

        settings: {
          arrows: false,

          centerMode: true,

          centerPadding: "40px",

          slidesToShow: 3,
        },
      },

      {
        breakpoint: 768,

        settings: {
          arrows: false,

          centerMode: true,

          centerPadding: "40px",

          slidesToShow: 1,
        },
      },

      {
        breakpoint: 480,

        settings: {
          arrows: false,

          centerMode: true,

          centerPadding: "40px",

          slidesToShow: 1,
        },
      },
    ],

    arrows: true,

    prevArrow: '<button type="button" class="slick-prev"></button>',

    nextArrow: '<button type="button" class="slick-next"></button>',

    customPaging: function (slider, i) {
      var slide = slider.$slides[i];

      var customClass = "wep-slick-arrow-class";

      $(slide).addClass(customClass);

      return (
        '<button type="button" data-role="none" role="button" tabindex="0" class="' +
        customClass +
        '"></button>'
      );
    },
  });

  // Thêm nội dung sau slider - Select the Slick slider element

  var slickSlider = $(".ssg_home_service__slick");

  // Create the custom content element

  var customContent = $(
    '<div class="wep_home_service__center_content"><div class="inner"></div></div>'
  );

  // Insert the custom content before the Slick slider

  customContent.insertAfter(slickSlider);

  // Center Content

  var centerSlideContent = slickSlider

    .find(".slick-center .ssg_home_service__content")

    .html();

  // Update the content of the .custom-content element

  customContent.find(".inner").html(centerSlideContent);

  // Attach the afterChange event handler

  $(".ssg_home_service__slick>button").on("click", function (event) {
    // Get the content of the .slick-center element

    var centerSlideContent = slickSlider

      .find(".slick-center .ssg_home_service__content")

      .html();

    // Update the content of the .custom-content element

    customContent.find(".inner").html(centerSlideContent);
  });

  // Lấy phần tử .ssg_home_service__center_content và .ssg_home_service__slick

  const centerContentElement = document.querySelector(
    ".ssg_home_service__center_content"
  );

  // Hàm để cập nhật độ rộng và padding cho .ssg_home_service__center_content

  function updateCenterContentWidthAndPadding() {
    // Lấy slide đang hiển thị (slick-current) và slide ở trung tâm (slick-center)

    const currentCenterSlide = slickSlider.find(".slick-current.slick-center");

    if (currentCenterSlide.length) {
      // Lấy độ rộng của slide ở trung tâm

      const width = currentCenterSlide.outerWidth();

      // Gán độ rộng cho .ssg_home_service__center_content

      centerContentElement.style.width = width + "px";

      // Lấy độ cao của .slick-current.slick-center .ssg_home_service__thumbnail

      const thumbnailElement = currentCenterSlide.find(
        ".ssg_home_service__thumbnail"
      );

      if (thumbnailElement.length) {
        const thumbnailHeight = thumbnailElement.outerHeight();

        // Gán độ cao vào padding-top của .ssg_home_service__center_content

        centerContentElement.style.paddingTop = thumbnailHeight + "px";
      }
    }
  }

  // Hàm để cập nhật tọa độ top và left cho các nút .slick-next và .slick-prev

  function updateButtonPositions() {
    // Lấy phần tử .inner bên trong .ssg_home_service__center_content

    const centerContentElement = document.querySelector(
      ".ssg_home_service__center_content"
    );

    const buttonLeft = document.querySelector(".slick-prev");

    const buttonRight = document.querySelector(".slick-next");

    const innerTop = centerContentElement.offsetTop;

    const innerLeft = centerContentElement.offsetLeft;

    const innerWidth = centerContentElement.offsetWidth;

    const windowWidth = window.innerWidth;

    var expandTop = 0;

    if (windowWidth > 992) {
      expandTop = 20;
    }

    if (windowWidth > 1024) {
      expandTop = 80;
    }

    if (windowWidth > 1200) {
      expandTop = 100;
    }

    if (windowWidth > 1368) {
      expandTop = 120;
    }

    if (windowWidth > 1440) {
      expandTop = 160;
    }

    if (windowWidth > 1600) {
      expandTop = 180;
    }

    if (windowWidth > 1800) {
      expandTop = 220;
    }

    if (buttonLeft && buttonRight) {
      // Cập nhật tọa độ top cho các nút .slick-next và .slick-prev

      document.querySelector(".slick-next").style.top =
        innerTop + expandTop + "px";

      document.querySelector(".slick-prev").style.top =
        innerTop + expandTop + "px";

      // Cập nhật tọa độ left cho các nút .slick-next và .slick-prev

      document.querySelector(".slick-prev").style.left =
        innerLeft - innerWidth / 2 - 80 + "px";

      document.querySelector(".slick-next").style.left =
        innerLeft + innerWidth / 2 + 10 + "px";
    }
  }

  const centerSliderContent = document.querySelector(
    ".ssg_home_service__center_content"
  );

  if (centerSliderContent) {
    // Gọi các hàm cần thiết để cập nhật tọa độ top và left của nút
    updateCenterContentWidthAndPadding();

    updateButtonPositions();

    // Gọi hàm updateCenterContentWidthAndPadding khi trang tải xong, sau mỗi lần thay đổi slide và sau mỗi lần resize trình duyệt

    slickSlider.on("init afterChange", updateCenterContentWidthAndPadding);

    $(window).on("resize", updateCenterContentWidthAndPadding);

    slickSlider.on("init afterChange", updateButtonPositions);

    $(window).on("resize", updateButtonPositions);
  }
});
