'use strict';

// Fonction pour valider l'email
function validateEmail(email) {
    const regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
    return regex.test(email);
}

// Fonction pour valider le message
function validateMessage(message) {
    // Vérifie que le message contient au moins un espace
    return /\s+/.test(message);
}

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form'); // Récupère le formulaire
    const emailInput = document.getElementById('email');
    const nomInput = document.getElementById('nom');
    const messageInput = document.getElementById('message');
    const errorMessage = document.createElement('div');
    errorMessage.style.color = 'red';
    form.appendChild(errorMessage);

    form.addEventListener('submit', (e) => {
        // Vider les messages d'erreur précédents
        errorMessage.textContent = '';

        let hasError = false;

        // Vérifier l'email
        if (!emailInput.value || !validateEmail(emailInput.value)) {
            errorMessage.textContent = "L'adresse e-mail est invalide.";
            hasError = true;
        }

        // Vérifier le nom
        if (!nomInput.value) {
            errorMessage.textContent = "Le nom est requis.";
            hasError = true;
        }

        // Vérifier le message
        if (!messageInput.value || !validateMessage(messageInput.value)) {
            errorMessage.textContent = "Le message doit contenir au moins une phrase complète.";
            hasError = true;
        }

        // Si une erreur a été détectée, empêcher l'envoi du formulaire
        if (hasError) {
            e.preventDefault(); // Empêche l'envoi du formulaire
        }
    });
});

