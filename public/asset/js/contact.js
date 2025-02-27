'use strict';

// Sélectionner les éléments
const toggleSwitch = document.getElementsByClassName('switch')[0].getElementsByTagName('input')[0];
const body = document.body;
const carreNoirBlanc = document.querySelector('.carre-noirblanc');
const carre2 = document.getElementsByClassName('carre2')[0];
const contacterMoi = document.getElementsByClassName('contacte-moi')[0];
const labels = document.getElementsByTagName('label');
const inputs = document.getElementsByTagName('input');
const textAreas = document.getElementsByTagName('textarea');

// Fonction pour appliquer le mode nuit
function enableNightMode() {
    body.style.backgroundColor = '#333';
    carre2.style.backgroundColor = '#1E1E1E';
    contacterMoi.style.color = '#f4f4f4';
    carreNoirBlanc.style.backgroundColor = '#1E1E1E';

    for (let label of labels) {
        label.style.color = 'white';
    }

    for (let input of inputs) {
        input.style.border = '2px solid black';
    }

    for (let textArea of textAreas) {
        textArea.style.border = '2px solid black';
    }
}

function disableNightMode(){
    body.style.backgroundColor = 'white';
    carre2.style.backgroundColor = 'white';
    contacterMoi.style.color = '#333';
    carreNoirBlanc.style.backgroundColor = 'white';
    for (let label of labels) {
        label.style.color = '#333';
    }
    for (let input of inputs) {
        input.style.border = '1px solid #ccc';
    }
    for (let textArea of textAreas) {
        textArea.style.border = '1px solid #ccc';
    }
}

// Ajouter un écouteur d'événement pour la case à cocher
toggleSwitch.addEventListener('change', () => {
    if (toggleSwitch.checked) {
        enableNightMode();
    } else {
        disableNightMode();
    }
});
