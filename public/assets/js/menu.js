const navBox = document.querySelector(".nav-header-AI")
const btnMenu = document.querySelector(".btn-menu-AI")
const lineInBtnMenu = document.querySelectorAll(".btn-menu__line-AI")

btnMenu.addEventListener("click", (e) => {
  navBox.classList.toggle("nav-active-js-AI")
  lineInBtnMenu.forEach((line) => {
    line.classList.toggle("line-active-js-AI")
  });
})

// suppression des class qui modifie la nav