const modal = document.querySelector(".modal");
const modalBtn = document.querySelectorAll(".modal-btn");
const closeModalbtn = document.querySelector(".close-modal-btn");

modalBtn.forEach((button) => {
  button.addEventListener("click", () => {
    modal.classList.add("open");
  });
});

closeModalbtn.addEventListener("click", () => {
  console.log(123);
  modal.classList.remove("open");
});
