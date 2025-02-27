'use strict';

const toggleSwitch = document.getElementsByClassName('switch')[0].getElementsByTagName('input')[0];
const body = document.body;
const menu = document.querySelector('nav');
let imageLogo = document.getElementById('logo');
let icon1 = document.getElementsByClassName('tech')[0];
let icon2 = document.getElementsByClassName('tech')[1];
let icon3 = document.getElementsByClassName('tech')[2];
const title = document.querySelector('h2');
const links = document.querySelectorAll('.nav-links a');
const contact = document.querySelectorAll('.nav-links a')[3];
const nav = document.querySelector('.nav-links'); 

function enableNightMode() {
    body.style.backgroundColor = '#1E1E1E';
    title.style.color = "white";
    menu.style.backgroundColor = '#1E1E1E';
    imageLogo.src = './asset/img/img-blanc/logo-blanc.webp';
    icon1.src = './asset/img/img-blanc/html-icon.webp';
    icon2.src = './asset/img/img-blanc/css-white.webp';
    icon3.src = './asset/img/img-blanc/javaScript-icon.webp';
    nav.style.backgroundColor = '#1E1E1E';
    links.forEach(link => {
        link.style.color = 'white'; // Change la couleur du texte en blanc
    });
}

function disableNightMode() {
    body.style.backgroundColor = 'white';
    title.style.color = "#1E1E1E";
    menu.style.backgroundColor = 'white';
    imageLogo.src = './asset/img/img-noir/logo-noir.webp';
    icon1.src = './asset/img/img-noir/html-black.webp';
    icon2.src = './asset/img/img-noir/css-black.webp';
    icon3.src = './asset/img/img-noir/javaScript-black.webp';
    nav.style.backgroundColor = 'white';
    links.forEach(link => {
        link.style.color = 'black'; // Change la couleur du texte en blanc
    });
    contact.style.color = 'white';
    menuBurger.forEach(span => {
        span.style.backgroundColor = "black";
    });

}

toggleSwitch.addEventListener('change', () => {
    if (toggleSwitch.checked) {
        enableNightMode();
    } else {
        disableNightMode();
    }
});