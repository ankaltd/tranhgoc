// helper.js



// Hàm kiểm tra xem thiết bị là mobile hay không

export function isMobileDevice() {

  const screenWidth = window.innerWidth;

  // Đặt một giá trị ngưỡng, ví dụ 768px, có thể thay đổi tùy ý để phù hợp với yêu cầu của bạn

  const mobileWidthThreshold = 768;

  return screenWidth < mobileWidthThreshold;

}



export function isMobile() {

  const userAgent = navigator.userAgent.toLowerCase();

  const mobileKeywords = [

    "mobile",

    "android",

    "iphone",

    "ipad",

    "windows phone",

  ];



  return mobileKeywords.some((keyword) => userAgent.includes(keyword));

}



export function scrollToSection(event) {

  event.preventDefault();



  const target = event.target.getAttribute("href");

  if (target !== null) {

    const targetElement = document.querySelector(target);

    const targetOffset = targetElement.offsetTop - 100;

    window.scrollTo({

      top: targetOffset,

      behavior: "smooth",

    });

  }



  // window.addEventListener("scroll", function scrollToTop() {

  //   if (window.pageYOffset === targetOffset) {

  //     window.scrollTo({

  //       top: targetOffset - 100,

  //       behavior: "smooth",

  //     });

  //     window.removeEventListener("scroll", scrollToTop);

  //   }

  // });

}

