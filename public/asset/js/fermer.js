'use strict';

document.querySelector(".fermer").addEventListener("click", () => {
    if (document.referrer.includes("contact.php")) {
        // Si la page précédente était un formulaire, on redirige vers l'accueil
        window.location.href = "../index.php";  // Change l'URL en fonction de la page d'accueil
    } else {
        // Sinon, on retourne à la page précédente
        window.history.back();
    }
});
