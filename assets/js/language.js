// language.js

export function initializeSelect2(input_data) {

  var data = [

    { id: "vn", text: "Việt Nam", image: "./images/icon-flat-vn.png" },

    { id: "en", text: "English", image: "./images/icon-flat-en.png" },

  ];



  data = input_data;



  // Images

  function formatOption(option) {

    if (!option.id) {

      return option.text;

    }



    var imageSrc = option.image

      ? '<img src="' + option.image + '" class="select2-image" />'

      : "";

    var optionText = "<span>" + imageSrc + " " + option.text + "</span>";



    return jQuery(optionText);

  }



  // Create Select2

  jQuery(document).ready(function () {

    jQuery("#ssg_language__select2").select2({

      data: data,

      templateResult: formatOption,

      minimumResultsForSearch: -1 // Tắt chức năng tìm kiếm



    });



  });

}

