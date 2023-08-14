// scrollHandling.js
export function setupScrollHandling() {
  const container = document.querySelector(".container-fluid");
  const scrollContainer = document.querySelector(".ssg_home_solution__main");

  function scrollToRight() {
    const scrollAmount = 50; // Khoảng cách cuộn sang trái

    // Cuộn đến vị trí đầu tiên của danh sách
    container.scrollLeft = 0;
  }

  function scrollToLeft() {
    const scrollAmount = 50; // Khoảng cách cuộn sang phải

    // Cuộn đến vị trí cuối cùng của danh sách
    container.scrollLeft = scrollContainer.scrollWidth - container.clientWidth;
  }

  const firstItem = document.querySelector(".ssg_home_solution__main .col:first-child");
  const lastItem = document.querySelector(".ssg_home_solution__main .col:last-child");

  if (firstItem && lastItem) {
    firstItem.addEventListener("click", scrollToRight);
    lastItem.addEventListener("click", scrollToLeft);
  }
}
