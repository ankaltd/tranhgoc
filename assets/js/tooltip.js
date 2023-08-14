// Kích hoạt tooltip bootstrap
// Hàm tạo tooltip
export function myTooltipFunction() {
  // Kích hoạt tooltip
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll(".tooltip-icon")
  );
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl, {
      delay: { show: 500 }, // Tốc độ hiện tooltip là 1 giây (1000 ms)
      animation: true, // Hiển thị tooltip với hiệu ứng
    });
  });
}
