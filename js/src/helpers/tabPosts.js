const tabButtons = document.querySelectorAll(".tab-btn");

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
