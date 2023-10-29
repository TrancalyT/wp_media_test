import './bootstrap.js';

// Scroll behaviour
window.addEventListener("scroll", function() {
    const header = document.querySelector(".sticky-header");
    const content = document.querySelector(".content");

    if (window.scrollY > 0) {
      header.classList.add("shrink-header");
      content.classList.add("shrink-content");
    } else {
      header.classList.remove("shrink-header");
      content.classList.remove("shrink-content");
    }
});
