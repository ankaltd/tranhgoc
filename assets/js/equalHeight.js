export function setEqualHeight(selector, content) {

  const elements = document.querySelectorAll(selector);
  const contents = document.querySelectorAll(content);
  let maxHeight = 0;

  elements.forEach((element) => {

    const elementHeight = element.offsetHeight;

    if (elementHeight > maxHeight) {

      maxHeight = elementHeight;

    }

  });



  elements.forEach((element) => {

    element.style.height = `${maxHeight}px`;

  });



  contents.forEach((element) => {

    element.style.height = `${maxHeight-2}px`;

  });

}

