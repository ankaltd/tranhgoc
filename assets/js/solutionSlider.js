export function handleSolutionClick() {
  const solutionWrappers = document.querySelectorAll(
    ".ssg_home_solution__wrapper"
  );

  solutionWrappers.forEach((wrapper) => {
    wrapper.addEventListener("click", () => {
      // Xóa toàn bộ class "active" của các thành phần .ssg_home_solution__wrapper
      solutionWrappers.forEach((item) => {
        item.classList.remove("active");
      });

      // Thêm class "active" cho thành phần hiện tại
      wrapper.classList.add("active");
    });
  });
}
