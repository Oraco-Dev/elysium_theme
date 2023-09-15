const tabButtons = document.querySelectorAll(".tab-btn");

document.addEventListener("DOMContentLoaded", function () {
  currentUrl = window.location.href;

  let splitUrl = currentUrl.split("/");

  if (
    splitUrl[3] === "personal-services" ||
    splitUrl[3] === "business-services"
  ) {
    tabButtons.forEach((button, i) => {
      // Find the <h5> element within the <div>
      let h5Element = button.querySelector("h5");

      // Get the content of the <h5> element as a string
      let contentAsString = h5Element.textContent.toLowerCase();
      let formattedString = contentAsString.trim().replace(/ /g, "-");

      if (splitUrl[4] === formattedString) {
        const targetTab = button.id;
        button.classList.add("active-tab-button");

        document
          .getElementById(targetTab + "-title")
          .classList.add("active-tab");
        document
          .getElementById(targetTab + "-content")
          .classList.add("active-tab");
      }
    });
  }
});

tabButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    const targetTab = e.currentTarget.id;

    const tabs = document.getElementsByClassName("tab");
    for (let i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove("active-tab");

      //   tabs[i].style.display = "none";
    }

    for (let j = 0; j < tabButtons.length; j++) {
      tabButtons[j].classList.remove("active-tab-button");
    }

    button.classList.add("active-tab-button");

    document.getElementById(targetTab + "-title").classList.add("active-tab");
    document.getElementById(targetTab + "-content").classList.add("active-tab");
  });
});
