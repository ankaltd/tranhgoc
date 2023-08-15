function showHeadNavBackgroundWhenScroll() {

    // Lấy phần tử bạn muốn thêm/bỏ thuộc tính CSS

    var headnav = document.getElementById("wep-navbar");

  

    // Thiết lập giá trị ban đầu của targetOpacity và currentOpacity

    var targetOpacity = 1;

    var currentOpacity = 0;

  

    // Tìm thành phần ".admin-bar .wep_header" điều chỉnh phần đầu

    var header_admin = document.querySelector(".admin-bar .wep_header");

    var header_carousel = document.querySelector(

      ".wep_header #carouselExampleCaptions"

    );

    var header_banner_admin = document.querySelector(

      ".admin-bar .wep_header .header_banner"

    );

    var header_web_logo = document.querySelector(".wep_headnav__logo .web_logo");

    var header_menu_logo = document.querySelector(

      ".wep_headnav__logo .menu_logo"

    );

  

    // Kiểm tra xem thành phần có tồn tại hay không

    if (header_admin && header_carousel) {

      // Áp dụng CSS "padding-top: 30px"

      header_admin.style.paddingTop = "30px";

    }

  

    // Tìm thành phần ".admin-bar .fixed-top"

    var fixed_top_admin = document.querySelector(".admin-bar .fixed-top");

    var fixed_top_admin_banner = document.querySelector(

      ".admin-bar .fixed-top .header_banner"

    );

  

    // Kiểm tra xem thành phần có tồn tại hay không

    if (fixed_top_admin) {

      // Áp dụng CSS "top: 20px"

      fixed_top_admin.style.top = "20px";

    }

  

    if (fixed_top_admin_banner) {

      header_banner_admin.style.top = "-10px";

    }

  

    // Fixed Click nav-link

    // Lấy danh sách tất cả các thành phần nav-link

    const navLinks = document.querySelectorAll(".nav-link");

  

    // Lặp qua từng thành phần nav-link và gán sự kiện click

    navLinks.forEach((navLink) => {

      navLink.addEventListener("click", () => {

        // Loại bỏ class .show từ thành phần nav-link

        navLink.classList.remove("show");

        // Đặt thuộc tính aria-expanded=false

        navLink.setAttribute("aria-expanded", "false");

  

        // Tìm thành phần .dropdown-menu kế tiếp của nav-link

        const dropdownMenu = navLink.nextElementSibling;

  

        // Nếu tồn tại dropdownMenu và có class .dropdown-menu

        if (dropdownMenu && dropdownMenu.classList.contains("dropdown-menu")) {

          // Loại bỏ class .show từ dropdownMenu

          dropdownMenu.classList.remove("show");

          // Loại bỏ thuộc tính data-bs-popper

          dropdownMenu.removeAttribute("data-bs-popper");

        }

      });

    });

  

    // Logo

    if (document.body.classList.contains("home") == false) {

    //   header_web_logo.style.display = "none";

    //   header_menu_logo.style.display = "block";

    }

  

    // Sử dụng sự kiện scroll để kiểm tra vị trí cuộn trang

    window.addEventListener("scroll", function () {

      // Lấy vị trí cuộn trang của người dùng

      var scrollPosition = window.scrollY || window.pageYOffset;

  

      if (document.body.classList.contains("home")) {

        if (scrollPosition === 0) {

          header_web_logo.style.display = "block";

          header_menu_logo.style.display = "none";

        } else {

          header_web_logo.style.display = "none";

          header_menu_logo.style.display = "block";

        }

      }

  

      // Nếu vị trí cuộn trang đạt tới đầu trang, thay đổi targetOpacity và hiển thị phần tử từ từ

      if (scrollPosition === 0) {

        // Thiết lập targetOpacity là 1 nếu chưa có

        if (targetOpacity !== 1) {

          targetOpacity = 1;

        }

  

        // Sử dụng phương thức setInterval để thay đổi giá trị currentOpacity từ 0 đến targetOpacity

        var intervalID = setInterval(function () {

          if (currentOpacity < targetOpacity) {

            currentOpacity += 0.1;

            headnav.style.opacity = currentOpacity;

          } else {

            clearInterval(intervalID);

          }

        }, 50);

  

        headnav.style.backgroundColor = "";

        headnav.style.border = "";

        headnav.style.opacity = "";

        headnav.style.boxShadow = "";

        headnav.style.color = "white";

        headnav.classList.remove("scrolling");

        //header_web_logo.style.display = "block";

        // header_menu_logo.style.display = "none";

      } else {

        headnav.style.backgroundColor = "rgba(255,255,255,1)";

        headnav.style.boxShadow = "0px 4px 15px rgba(0, 0, 0, 0.1)";

        headnav.style.border = "1px solid rgba(0, 0, 0, 0.1)";

        headnav.style.color = "rgba(22,42,82,1)";

        headnav.classList.add("scrolling");

        // header_web_logo.style.display = "none";

        // header_menu_logo.style.display = "block";

  

        // Nếu vị trí cũ

        currentOpacity = targetOpacity;

        headnav.style.opacity = currentOpacity;

  

        // Sử dụng phương thức setInterval để thay đổi giá trị currentOpacity từ 0 đến targetOpacity

        var intervalID = setInterval(function () {

          if (currentOpacity < targetOpacity) {

            currentOpacity += 0.1;

            headnav.style.opacity = currentOpacity;

          } else {

            clearInterval(intervalID);

          }

        }, 50);

      }

    });

  }

  

  export { showHeadNavBackgroundWhenScroll };

  