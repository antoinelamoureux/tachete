var navLinks = document.getElementsByClassName('nav-link')

for (let link of navLinks) {
    link.addEventListener("click", (e) => {   
        console.log("click")
       e.target.style =  "border-bottom: 4px solid rgb(95, 123, 235)"
       e.target.style += "margin-bottom: -20px"
       e.target.style += "color: rgb(95, 123, 235)"
    })
}

/* var links = document.getElementsByClassName('nav-option');
function changeColor(e) {
    e.target.style.color = e.target.style.color ? null : 'red';
}
for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', changeColor);
} */

/* window.addEventListener("load", () => {
    var overlay = document.querySelector(".document")
    overlay.classList.remove('document')
    overlay.classList.add('overlay')
    console.log("Toutes les ressources sont chargées !")
  })
 */

/* var overlayLink = document.getElementsByClassName('overlay-link')
var overlay = document.querySelector(".document")

for (let link of overlayLink ) {
    link.addEventListener("click", (e) => {   
        if (document.querySelector(".document")) {
        overlay.classList.remove('document')
        overlay.classList.add('overlay')
        console.log("loading")
        } 
    })
}
 */

/* window.addEventListener("unload", () => {
    if (document.querySelector(".overlay")) {
        overlay.classList.remove('overlay')
        overlay.classList.add('document')
        console.log("unloading")
        }
      })
 */