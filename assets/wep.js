import {
  btnScrollTop,
  scrollToTop,
  toggleScrollTopButton,
} from "./js/gototop.js";

import { isMobile, isMobileDevice, scrollToSection } from "./js/wep-helper.js";
import { setEqualHeight } from "./js/equalHeight.js";
import { initializeMegaMenu, setCurrentPageClass } from "./js/megaMenu.js";
import { handleSolutionClick } from "./js/solutionSlider.js";
import { getParameterValue } from "./js/readURI.js";
import { initStickyNavbar } from "./js/wep-sticky-top.js";
import { trackSections } from "./js/gotoSection.js";
import { performSearch } from "./js/searchFunction.js";
import { myTooltipFunction } from "./js/tooltip.js";
import { setupScrollHandling } from "./js/scrollHandling.js";
import "./js/wepAjax.js";
import "./js/slickSlider.js";
import "./js/slickGrid.js";
import "./js/wep-progress-bar.js";

// Gọi hàm setupScrollHandling để thiết lập xử lý cuộn ngang
setupScrollHandling();

// Search when enter or click button
document.addEventListener("DOMContentLoaded", function () {
  // Gán sự kiện cho nút #wep_search
  document.getElementById("wep_search").addEventListener("click", function () {
    performSearch();
  });

  // Gán sự kiện cho khi nhấn Enter trong trường tìm kiếm

  document
    .querySelector(".search-field")
    .addEventListener("keypress", function (e) {
      if (e.key === "Enter") {
        performSearch();
      }
    });
});

// Gọi hàm initializeMegaMenu() để khởi tạo menu mega, setCurrentPageClass() để đặt current page
initializeMegaMenu();
setCurrentPageClass();

// Create goto Sections ==============================
document.addEventListener("DOMContentLoaded", function () {
  trackSections();
});

// Fixed Scroll to anchor section
const scrollLinks = document.querySelectorAll(".wep_goto_section__item");

scrollLinks.forEach((link) => {
  link.addEventListener("click", scrollToSection);
});

// Gọi hàm initStickyNavbar() for Fixed Section Bar Quick Links
initStickyNavbar(600);

// Gọi hàm handleSolutionClick() để bắt sự kiện click và thực hiện các hành động tương ứng Home Solution Slider
handleSolutionClick();

// SCROLL TO TOP ********************************************/
btnScrollTop.addEventListener("click", scrollToTop);

window.addEventListener("scroll", toggleScrollTopButton);

// Sử dụng hàm getValueFromHash() for Active News Branch Links ********************/
// Sử dụng hàm để lấy giá trị của tham số từ URL

const value = getParameterValue("industry");

// Kiểm tra và thêm thuộc tính "active" vào các phần tử <a> trong danh sách .item
var itemLinks = document.querySelectorAll(".wep_news_branch__item");

itemLinks.forEach(function (link) {
  var slug = link.getAttribute("data-slug");

  if (slug === value) {
    link.classList.add("active");
  }
});

// Kích hoạt AOS ===================
AOS.init({
  duration: 1200,
  once: true,
});

// Equal Height =========================
if (!isMobileDevice()) {
  // Call the function with your desired selector

  setEqualHeight(".wep_home_news__item", ".wep_home_news__item .content");

  setEqualHeight(".wep_prize__thumbnail", ".wep_prize__thumbnail .content");

  setEqualHeight(
    ".wep_home_news_image__content",

    ".wep_home_news_image__content"
  );

  setEqualHeight(
    ".wep_service_benefit .content",

    ".wep_service_benefit .content"
  );

  setEqualHeight(
    ".wep_vision .content",

    ".wep_vision .content"
  );

  setEqualHeight(".wep_contact_infor .content", ".wep_contact_infor .content");
}

// Gọi hàm tạo tooltip từ module tooltip.js
myTooltipFunction();
