// web.js
// Kiểm tra xem trình duyệt có phải là thiết bị di động không
if (window.innerWidth <= 768) {
  // Thay đổi 768 thành kích thước màn hình bạn muốn
  // Nếu đúng, nhập tệp mobile.js và gọi module
  import("./js/mobile.js").then((module) => {
    const toggleOffcanvasMenu = module.default;
    toggleOffcanvasMenu(); // Gọi module cho menu offcanvas
  });
} else {
  // Trường hợp này cho các thiết bị khác
  // Đặt mã JavaScript của bạn cho các thiết bị lớn hơn 768px ở đây
}
