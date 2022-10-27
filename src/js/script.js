let hamburger = document.querySelector('.hamburger')
let closeElem = document.querySelector('.menu__close_btn');
let menuOverlay = document.querySelector('.menu__overlay')
let menu = document.querySelector('.menu');
let menuLink = [];
menuLink = document.querySelectorAll('.menu__link')

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
    menuOverlay.classList.add('active');

});
function hide () {
    menu.classList.remove('active');
    menuOverlay.classList.remove('active');
    console.log('blia')
}

closeElem.addEventListener('click', hide);
menuOverlay.addEventListener('click', hide);

for (i = 0; i < menuLink.length; i++) {
    menuLink[i].addEventListener('click', hide)
}