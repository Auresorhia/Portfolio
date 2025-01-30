document.addEventListener('DOMContentLoaded', function () {
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const prevButton = document.querySelector('.prev-btn'); // bouton précédent
  const nextButton = document.querySelector('.next-btn'); // bouton suivant

  let currentIndex = 0; // On commence avec le premier projet

  // Fonction pour mettre à jour le slider en fonction de l'index
  function updateSlider() {
    // Applique un décalage de l'index actuel
    const offset = -(currentIndex * 100); // Décalage basé sur l'index actuel
    slider.style.transform = `translateX(${offset}%)`;

    // Met en surbrillance le projet actif (optionnel)
    slides.forEach((slide, index) => {
      slide.classList.remove('project-main');
      if (index === currentIndex) {
        slide.classList.add('project-main');
      }
    });
  }

  // Gère le clic sur le bouton précédent
  prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
    updateSlider();
  });

  // Gère le clic sur le bouton suivant
  nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
    updateSlider();
  });

  // Initialisation du slider
  updateSlider();
});
