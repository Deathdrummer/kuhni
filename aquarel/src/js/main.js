import "./_vendor";
import vars from "./_vars";
import "./_functions";
import "./_components";

var element = document.querySelector("header");
if (!element.classList.contains("shadow")) {
  window.addEventListener("scroll", function () {
    if (window.scrollY > 1) {
      element.classList.add("shadow");
    } else {
      element.classList.remove("shadow");
    }
  });
}

const modalPrice = document.querySelector("#formPrice");
const modalMessege = document.querySelector("#modalMessege");
function onResize(a, w) {
  if (a) {
    if (window.innerWidth < w) {
      a.classList.add("modal");

      a.style.display = "none";
      a.querySelector("div").classList.add("modal-dialog");
      a.querySelector("div").classList.add("modal-dialog-centered");
    } else {
      if (a) {
        a.classList.remove("modal");
        a.style.display = "block";
        a.querySelector("div").classList.remove("modal-dialog");
        a.querySelector("div").classList.remove("modal-dialog-centered");
      }
    }
  }
}
onResize(modalMessege, 1024);
onResize(modalPrice, 1024);
window.addEventListener("resize", (event) => {
  onResize(modalPrice, 1024);
});
window.addEventListener("resize", (event) => {
  onResize(modalMessege, 1024);
});

// Select all checkboxes with type "checkbox"
const radioButtons = document.querySelectorAll('input[type="radio"]');

// Create a function to handle the radio button change event
function handleRadioButtonChange() {
  const name = this.name;
  const checkboxes = document.querySelectorAll(`input[type="radio"][name="${name}"]`);

  checkboxes.forEach((checkbox, index) => {
    if (checkbox.checked) {
      if (checkbox.labels[0]) {
        checkbox.labels[0].classList.remove("inactive-label");
      }
      if (checkbox.parentElement.parentElement.classList.contains("form-check-image")) {
        checkbox.parentElement.parentElement.classList.remove("inactive-label");
      }
      checkbox.classList.remove("inactive-radio");
    } else {
      if (checkbox.labels[0]) {
        checkbox.labels[0].classList.add("inactive-label");
      }
      if (checkbox.parentElement.parentElement.classList.contains("form-check-image")) {
        checkbox.parentElement.parentElement.classList.add("inactive-label");
      }
      checkbox.classList.add("inactive-radio");
    }
  });
}

if (radioButtons) {
  // Add event listeners to each radio button
  radioButtons.forEach(function (radio) {
    radio.addEventListener("change", handleRadioButtonChange);
  });
}

document.addEventListener("DOMContentLoaded", function () {
  const maskTel = document.querySelectorAll("input[type='tel']");

  maskTel.forEach(function (item) {
    const im = new Inputmask("+7 (999) 999-9999");
    im.mask(item);
  });

  Fancybox.bind("[data-fancybox]", {
    //
  });
  var stickyEl = document.querySelector(".block--sticksyJs");

  function onResizeSticky(e, w) {
    if (e) {
      if (window.innerWidth > w) {
        new Sticksy(".block--sticksyJs", { topSpacing: 103 });
      }
    }
  }
  onResizeSticky(stickyEl, 1024);

  window.addEventListener("resize", (event) => {
    onResizeSticky(stickyEl, 1024);
  });
});
