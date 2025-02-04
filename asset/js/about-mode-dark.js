'use strict';

const toggleSwitch = document.getElementsByClassName('switch')[0].getElementsByTagName('input')[0];
const body = document.body;
const menu = document.querySelector('nav');
let imageLogo = document.getElementById('logo');
let src = imageLogo.getAttribute('src');
const links = document.querySelectorAll('.nav-links a');
const contact = document.querySelectorAll('.nav-links a')[3];
const nav = document.querySelector('.nav-links'); 
const title = document.querySelector('h1');
const title2 = document.querySelector('h2');
const title3 = document.querySelector('h3');
const title4 = document.querySelector('h4');
const title5 = document.getElementsByTagName('h5');
const title6 = document.getElementsByTagName('h6');

function enableNightMode() {
    body.style.backgroundColor = '#1E1E1E';
    title.style.color = "white";
    title2.style.color = "white";
    title3.style.color = "white";
    title4.style.color = "white";
    title5.style.color = "white";
    title6.style.color = "white";
    menu.style.backgroundColor = '#1E1E1E';
    imageLogo.src = './asset/img/img-blanc/logo-blanc.webp';
    nav.style.backgroundColor = '#1E1E1E';
    links.forEach(link => {
        link.style.color = 'white'; // Change la couleur du texte en blanc
    });
}

function disableNightMode() {
    body.style.backgroundColor = 'white';
    title.style.color = "black";
    title2.style.color = "black";
    title3.style.color = "black";
    title4.style.color = "black";
    title5.style.color = "black";
    title6.style.color = "black";
    menu.style.backgroundColor = 'white';
    imageLogo.src = './asset/img/img-noir/logo-noir.webp';
    nav.style.backgroundColor = 'white';
    links.forEach(link => {
        link.style.color = 'white'; // Change la couleur du texte en blanc
    });
    contact.style.color = 'white';
}

toggleSwitch.addEventListener('change', () => {
    if (toggleSwitch.checked) {
        enableNightMode();
    } else {
        disableNightMode();
    }
});