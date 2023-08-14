document.addEventListener("DOMContentLoaded", function () {
  let body = document.body;

  let header = document.getElementById("header");

  let lastScrollTop = 0;

  window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      body.classList.contains("dark-mode")
        ? header.classList.add("dark-mode")
        : header.classList.add("light-mode");
      header.classList.add("hide-header");
    } else {
      // Scrolling up
      header.classList.remove("hide-header");
    }

    if (scrollTop === 0) {
      header.classList.add("transparent-background");
    } else {
      header.classList.remove("transparent-background");
    }

    lastScrollTop = scrollTop;
  });

  var timeout = null;

  function resetTimeout() {
    clearTimeout(timeout);
    timeout = setTimeout(function () {
      header.classList.remove("hide-header");
    }, 500);
  }

  window.addEventListener("scroll", resetTimeout);
});
