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
const title51 = document.querySelectorAll('h5')[0];
const title52 = document.querySelectorAll('h5')[1];
const title53 = document.querySelectorAll('h5')[2];
const title61 = document.querySelectorAll('h6')[0];
const title62 = document.querySelectorAll('h6')[1];
const title63 = document.querySelectorAll('h6')[2];
const menuBurger = document.querySelectorAll(".burger span");

function enableNightMode() {
    body.style.backgroundColor = '#1E1E1E';
    title.style.color = "white";
    title2.style.color = "white";
    title3.style.color = "white";
    title4.style.color = "white";
    title51.style.color = "white";
    title52.style.color = "white";
    title53.style.color = "white";
    title61.style.color = "white";
    title62.style.color = "white";
    title63.style.color = "white";
    menu.style.backgroundColor = '#1E1E1E';
    imageLogo.src = 'public/asset/img/logo/logo-blanc.webp';
    nav.style.backgroundColor = '#1E1E1E';
    links.forEach(link => {
        link.style.color = 'white'; // Change la couleur du texte en blanc
    });
    menuBurger.forEach(span => {
        span.style.backgroundColor = "white";
    });
}

function disableNightMode() {
    body.style.backgroundColor = 'white';
    title.style.color = "black";
    title2.style.color = "black";
    title3.style.color = "black";
    title4.style.color = "black";
    title51.style.color = "black"
    title52.style.color = "black";
    title53.style.color = "black";
    title61.style.color = "black";
    title62.style.color = "black";
    title63.style.color = "black";
    menu.style.backgroundColor = 'white';
    imageLogo.src = 'public/asset/img/logo/logo-noir.webp';
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