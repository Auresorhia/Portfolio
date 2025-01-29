'use strict';

let off = document.getElementById('mode');
let mode = document.getElementsByClassName('carre2')[0]; // Cible le premier élément avec la classe 'carre2'
let contactez_moi = document.getElementsByClassName('contacte-moi')[0]; // Cible le premier élément avec la classe 'contacte-moi'
let labels = document.getElementsByTagName('label');
let inputs = document.getElementsByTagName('input');
let textAreas = document.getElementsByTagName('textarea');

off.addEventListener('click', () => {
    document.body.style.background = "#333";
    mode.style.backgroundColor = "#1E1E1E";
    contactez_moi.style.color = "#f4f4f4";

    // Applique un style à chaque label
    for (let label of labels) {
        label.style.color = "white";
    }

    // Applique un style à chaque input
    for (let input of inputs) {
        input.style.border = "2px solid black"; // Définir la largeur, le style (solide) et la couleur de la bordure
    }

    // Applique un style à chaque textarea
    for (let textArea of textAreas) {
        textArea.style.color = "2px solid black";
    }
});
