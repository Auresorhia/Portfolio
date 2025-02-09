'use strict'

document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".burger");
    const navLinks = document.querySelector(".nav-links");

    if (!burger || !navLinks) {
        console.error("Burger or nav-links not found!");
        return;
    }

    function toggleMenu() {
        navLinks.classList.toggle("active");
        burger.classList.toggle("toggle");
    }

    // Ajouter l'écouteur d'événement click sur le burger
    burger.addEventListener("click", toggleMenu);

    // Fermer le menu quand on clique sur un lien
    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove("active");
            burger.classList.remove("toggle");
        });
    });

    function checkScreenSize() {
        // Si l'écran est supérieur à 1262px, réinitialise l'état du menu
        if (window.innerWidth >= 1263) {
            navLinks.classList.remove("active");
            burger.classList.remove("toggle");
        }
    }

    // Appel initial au chargement de la page
    checkScreenSize();

    // Ajout de l'écouteur d'événement lors du redimensionnement
    window.addEventListener("resize", checkScreenSize);
});
