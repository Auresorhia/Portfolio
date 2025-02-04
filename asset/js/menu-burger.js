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

  function checkScreenSize() {
      // Si l'écran est supérieur à 480px, réinitialise l'état du menu
      if (window.innerWidth > 480) {
          navLinks.classList.remove("active");
          burger.classList.remove("toggle");
          // Désactive l'interaction du burger pour les grands écrans
          burger.removeEventListener("click", toggleMenu);
      } else {
          // Ajoute l'événement de clic pour les écrans mobiles
          burger.addEventListener("click", toggleMenu);
      }
  }

  // Appel initial au chargement de la page
  checkScreenSize();

  // Ajout de l'écouteur d'événement lors du redimensionnement
  window.addEventListener("resize", checkScreenSize);
});
