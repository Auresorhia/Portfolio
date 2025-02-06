'use strict';

const toggleSwitch = document.getElementsByClassName('switch')[0].getElementsByTagName('input')[0];
const body = document.body;
const menu = document.querySelector('nav');
const contact = document.querySelectorAll('.nav-links a')[3];
const titre1 = document.querySelectorAll('h2')[0];
const titre2 = document.querySelectorAll('h2')[1];
const links = document.querySelectorAll('.nav-links a');
const nav = document.querySelector('.nav-links'); 
const title = document.querySelector('h1');
let imageLogo = document.getElementById('logo');
const menuBurger = document.querySelectorAll(".burger span");
const li = document.querySelectorAll('li');
const border = document.querySelector('.mentions');

function enableNightMode() {
    body.style.backgroundColor = '#1E1E1E';
    title.style.color = "#57ED89";
    menu.style.backgroundColor = '#1E1E1E';
    menuBurger.forEach(span => {
        span.style.backgroundColor = "white";
    });
    imageLogo.src = './asset/img/img-blanc/logo-blanc.webp';
    titre1.style.color = "white";
    titre2.style.color = "white";
    nav.style.backgroundColor = '#1E1E1E';
    border.style.border = "4px white solid";
    links.forEach(link => {
        link.style.color = 'white'; // Change la couleur du texte en blanc
    });
    li.forEach(item => {
        item.style.color = 'white';
    });
    menuBurger.forEach(span => {
        span.style.backgroundColor = "white";
    });
}

function disableNightMode(){
    body.style.backgroundColor = 'white';
    title.style.color = "black";
    imageLogo.src = './asset/img/img-noir/logo-noir.webp';
    menu.style.backgroundColor = 'white';
    nav.style.backgroundColor = "white";
    contact.style.color = "white";
    titre1.style.color = "black";
    titre2.style.color = "black";
    border.style.border = "4px solid"
    links.forEach(link => {
        link.style.color = 'black'; // Change la couleur du texte en noir
    });
    li.forEach(item => {
        item.style.color = 'black';
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