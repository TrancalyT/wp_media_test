import './bootstrap.js';
const currentURL = window.location.href;

// Scroll behaviour
window.addEventListener('scroll', function() {
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

// Style
if (currentURL.includes("/contact")) {
    var contactLink = document.getElementById('contactLink');

    if (contactLink) {
        contactLink.style.color = 'blueviolet';
    }
}

if (currentURL.includes("/videos")) {
  var videosLink = document.getElementById('videosLink');

  if (videosLink) {
    videosLink.style.color = 'blueviolet';
  }
}

// Back to top
document.getElementById('to-top').addEventListener('click', function() {
  window.scrollTo(0, 0);
});