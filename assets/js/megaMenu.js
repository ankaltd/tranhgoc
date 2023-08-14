export function initializeMegaMenu() {

  document.addEventListener("DOMContentLoaded", function () {

    /////// Prevent closing from click inside dropdown

    document.querySelectorAll(".dropdown-menu").forEach(function (element) {

      element.addEventListener("click", function (e) {

        e.stopPropagation();

      });

    });

  });

  // DOMContentLoaded  end

}



// menuModule.js



// Hàm kiểm tra và thêm class 'current_page' cho menu item cha chứa liên kết hiện tại

export function setCurrentPageClass() {

  document.addEventListener("DOMContentLoaded", function () {

    // Lấy giá trị URL hiện tại của trang

    var currentURL = window.location.href;



    // Lấy tất cả các thẻ a bên trong các cấp độ #ssg_mega_menu > .nav-item và .dropdown-item

    var menuLinks = document.querySelectorAll(

      "#ssg_mega_menu .nav-item a, #ssg_mega_menu .dropdown-item a"

    );



    // Duyệt qua danh sách các thẻ a và kiểm tra xem giá trị của thuộc tính href có chứa giá trị của URL hiện tại hay không

    for (var i = 0; i < menuLinks.length; i++) {

      var link = menuLinks[i];

      var hrefValue = link.getAttribute("href");



      if (currentURL === hrefValue) {

        // Nếu href của thẻ a trùng khớp với URL hiện tại, thêm class 'current_page' vào thẻ li cha bên ngoài cùng

        var topLevelListItem = findTopLevelListItem(link);

        if (topLevelListItem) {

          topLevelListItem.classList.add("current_page");

        }

      }

    }



    // Hàm tìm thẻ li cha bên ngoài cùng chứa thẻ a

    function findTopLevelListItem(link) {

      var listItem = link.parentNode;

      while (listItem !== null && !listItem.classList.contains("nav-item")) {

        listItem = listItem.parentNode;

      }

      return listItem;

    }

  });

}

