// customDropdown.js

export function initCustomDropdown() {
  jQuery("#ssg_mega_menu .nav-item").mouseenter(function() {
    const $thisNavItem = jQuery(this);

    jQuery("#ssg_mega_menu .nav-item .dropdown-toggle, #ssg_mega_menu .nav-item .dropdown-menu").removeClass("show");
    jQuery("#ssg_mega_menu .nav-item .dropdown-toggle").attr("aria-expanded", "false");

    if ($thisNavItem.hasClass("has-megamenu") || $thisNavItem.hasClass("dropdown")) {
      $thisNavItem.find(".dropdown-toggle, .dropdown-menu").addClass("show");
      $thisNavItem.find(".dropdown-toggle").attr("aria-expanded", "true");
    }
  });
}