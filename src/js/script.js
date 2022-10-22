let hamburger = document.querySelector('.hamburger')
let closeElem = document.querySelector('.menu__close_btn');
let menuOverlay = document.querySelector('.menu__overlay')
let menu = document.querySelector('.menu');

let lastline = document.querySelectorAll('.aboutMe__skill_heightLine');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
    menuOverlay.classList.add('active');

});


closeElem.addEventListener('click', () => {

    menu.classList.remove('active');
    menuOverlay.classList.remove('active');
});

let line = lastline[lastline.length - 1];
line.style.width = '0px';



