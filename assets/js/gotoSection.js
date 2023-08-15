// trackThisModule.js

export function trackSections() {

    const trackThisElements = document.querySelectorAll(".trackThis");

    const newLinkItems = [];

  

    trackThisElements.forEach((element) => {

      const id = element.id;

      const headingElement = element.querySelector(".wep_heading");

      const text = headingElement ? headingElement.textContent : id;

  
      const listItem = document.createElement("a");

      listItem.className = "wep_goto_section__item";

      listItem.href = `#${id}`;

      listItem.innerHTML = `${text} <span class="target_${id}"></span>`;

  
      newLinkItems.unshift(listItem); // Thêm vào đầu mảng để đảo ngược thứ tự

  
      // Loại bỏ các thành phần có class .progress-section-note bên trong #progress-section

      const progressNoteElements = document.querySelectorAll(".progress-section-note");

      progressNoteElements.forEach((noteElement) => {

        noteElement.remove();

      });

    });

  

    const progressSection = document.getElementById("progress-section");

    if (progressSection) {

      newLinkItems.forEach((item) => {

        progressSection.insertAdjacentElement("afterend", item);

      });

    }

  }

  