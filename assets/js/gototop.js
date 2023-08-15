/* SCROLL TO TOP ********************************************/
export const btnScrollTop = document.getElementById("btnScrollTop");

export function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

/* SHOW/HIDE SCROLL TO TOP BUTTON */
export function toggleScrollTopButton() {
  if (window.pageYOffset > 300) {
    btnScrollTop.classList.add("show");
  } else {
    btnScrollTop.classList.remove("show");
  }
}
