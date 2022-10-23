let hamburger = document.querySelector('.hamburger')
let closeElem = document.querySelector('.menu__close_btn');
let menuOverlay = document.querySelector('.menu__overlay')
let menu = document.querySelector('.menu');

let lastline = document.querySelectorAll('#heightLine');
// console.log(lastline);



let ulFirstBlock = document.querySelectorAll('ul')
console.log(ulFirstBlock)
console.log(ulFirstBlock[1].children[4].children[0].childNodes[1])

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
    menuOverlay.classList.add('active');

});


closeElem.addEventListener('click', () => {

    menu.classList.remove('active');
    menuOverlay.classList.remove('active');
});


// ulFirstBlock[1].children[4].children[0].childNodes[1].style.width = '0px';


