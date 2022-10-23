let hamburger = document.querySelector('.hamburger')
let closeElem = document.querySelector('.menu__close_btn');
let menuOverlay = document.querySelector('.menu__overlay')
let menu = document.querySelector('.menu');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
    menuOverlay.classList.add('active');

});


closeElem.addEventListener('click', () => {

    menu.classList.remove('active');
    menuOverlay.classList.remove('active');
});