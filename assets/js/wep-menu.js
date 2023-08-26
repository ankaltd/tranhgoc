// mobile.js
// Đây là mã JavaScript cho menu offcanvas trên các thiết bị di động

// Đoạn mã JavaScript cho hiển thị và ẩn menu offcanvas
const toggleOffcanvasMenu = () => {
    const offcanvasMenu = document.getElementById('offcanvas-menu');
    const offcanvasBackdrop = document.querySelector('.offcanvas-backdrop');

    const openButton = document.querySelector('.offcanvas-open');
    const closeButton = document.querySelector('.offcanvas-close');

    openButton.addEventListener('click', () => {
        offcanvasMenu.classList.add('show');
        offcanvasBackdrop.classList.add('show');
    });

    closeButton.addEventListener('click', () => {
        offcanvasMenu.classList.remove('show');
        offcanvasBackdrop.classList.remove('show');
    });

    offcanvasBackdrop.addEventListener('click', () => {
        offcanvasMenu.classList.remove('show');
        offcanvasBackdrop.classList.remove('show');
    });
};

export default toggleOffcanvasMenu;
