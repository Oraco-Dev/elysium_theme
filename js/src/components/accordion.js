const accordionItems = document.querySelectorAll(".accordion-item");

accordionItems.forEach((item) => {
  const header = item.querySelector(".accordion-header");
  const content = item.querySelector(".accordion-content");

  header.addEventListener("click", () => {
    // Close all accordion items first
    accordionItems.forEach((otherItem) => {
      if (otherItem !== item) {
        otherItem
          .querySelector(".accordion-content")
          .classList.remove("active");
      }
    });

    // Toggle the active class for the clicked item
    content.classList.toggle("active");
  });
});
