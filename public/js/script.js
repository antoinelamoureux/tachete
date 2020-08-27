var links = document.getElementsByClassName('nav-option');
function changeColor(e) {
    e.target.style.color = e.target.style.color ? null : 'blue';
}
for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', changeColor);
}