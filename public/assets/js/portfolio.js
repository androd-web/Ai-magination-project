const cards = document.querySelectorAll(".card-AI")
const containerCard = document.querySelector(".container-card")

if(window.matchMedia("(pointer:fine)").matches) {
  containerCard.addEventListener("mousemove", handleBlobMouvement)
  containerCard.addEventListener("mouseout", handleBlobMouseOut)
}

function handleBlobMouvement(e) {
  cards.forEach((card) => {
    const blob = card.querySelector(".card-blob")
    const cardRect = card.getBoundingClientRect()
    blob.style.opacity = "1"
    blob.style.transform = `translate(calc(${(e.clientX - cardRect.left)}px - 50%), calc(${(e.clientY - cardRect.top)}px - 50%)`
  })
}

function handleBlobMouseOut(e) {
  cards.forEach((card) => {
    const blob = card.querySelector(".card-blob")
    const cardRect = card.getBoundingClientRect()
    blob.style.opacity = "0"
  })
}
// 
// 
// 
// 
// box details card
const btnCloseDetails = document.querySelector(".btn-close-details")
const boxDetailsImg = document.querySelector(".box-details-img")
const allBtnSeeMore = document.querySelectorAll(".card_btn-see-more")
const imgDetails = document.querySelector(".img-details")

let src = ""
let alt = ""
let titleCard = ""
let descriptionCard = ""

allBtnSeeMore.forEach((btnSeeMore) => {
  btnSeeMore.addEventListener("click", (e) => {
    boxDetailsImg.style.display = "block"
    console.log(e);

    // get attribute src
    src = e.target.parentElement.parentElement.children["0"].attributes["0"].value

    // get attribute alt
    alt = e.target.parentElement.parentElement.children["0"].attributes["1"].value
    
    // get title card
    titleCard = e.target.parentElement.children["0"].textContent

    // get description card
    descriptionCard = e.target.parentElement.children["1"].textContent
    
    imgDetails.setAttribute("src", src)
    imgDetails.setAttribute("alt", alt)

    // get text content in cardTitle
    boxDetailsImg.children["2"].children["1"].textContent = titleCard

    // get description in descriptionCard
    boxDetailsImg.children["2"].children["3"].textContent = descriptionCard
  })
  btnCloseDetails.addEventListener("click", () => {
    boxDetailsImg.style.display = "none"
  })
})