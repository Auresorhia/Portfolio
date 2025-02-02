'use strict';

const toggleSwitch = document.getElementsByClassName('switch')[0].getElementsByTagName('input')[0];
const body = document.body;
const menu = document.querySelector('nav');
const contact = document.querySelectorAll('.nav-links a')[3];
const projets = document.querySelectorAll('h2')[1];
const competences = document.querySelectorAll('h2')[2];
const links = document.querySelectorAll('.nav-links a');
const nav = document.querySelector('.nav-links'); 
const title = document.querySelector('h1');
const formation = document.querySelector('h3');
const alternance = document.querySelector('h4');
const intro = document.querySelector('.intro-btn');
const textIntro = intro.getElementsByTagName('p')[0];
const textImp = textIntro.getElementsByTagName('strong')[0];
const textImp2 = textIntro.getElementsByTagName('strong')[1];
let imageLogo = document.getElementById('logo');
let src = imageLogo.getAttribute('src');

// Fonction pour appliquer le mode nuit
function enableNightMode() {
    body.style.backgroundColor = '#1E1E1E';
    title.style.color = "white";
    menu.style.backgroundColor = '#1E1E1E';
    imageLogo.src = './asset/img/img-blanc/logo-blanc.webp';
    projets.style.color = "white";
    competences.style.color = "white";
    formation.style.color = "white";
    alternance.style.color = "white";
    intro.style.backgroundColor = '#473FF7';
    textIntro.style.color = "white";
    textImp.style.color = "#57ED89";
    textImp2.style.color = "#57ED89";
    nav.style.backgroundColor = '#1E1E1E';
    links.forEach(link => {
        link.style.color = 'white'; // Change la couleur du texte en blanc
    });
}

function disableNightMode(){
    body.style.backgroundColor = 'white';
    title.style.color = "black";
    imageLogo.src = './asset/img/img-noir/logo-noir.webp';
    menu.style.backgroundColor = 'white';
    nav.style.backgroundColor = "white";
    contact.style.color = "white";
    projets.style.color = "black";
    competences.style.color = "black";
    formation.style.color = "black";
    alternance.style.color = "black";
    intro.style.backgroundColor = '#E5E5FF';
    textIntro.style.color = "white";
    textImp.style.color = "#473FF7";
    textImp2.style.color = "#473FF7";
    links.forEach(link => {
        link.style.color = 'black'; // Change la couleur du texte en noir
    });
    contact.style.color = 'white';
}

// Ajouter un écouteur d'événement pour la case à cocher
toggleSwitch.addEventListener('change', () => {
    if (toggleSwitch.checked) {
        enableNightMode();
    } else {
        disableNightMode();
    }
});