const slider = document.querySelector('.slider');
const projects = document.querySelectorAll('.project');
const leftButton = document.querySelector('.left-button');
const rightButton = document.querySelector('.right-button');

let currentIndex = 2; // On commence avec le projet central

// Met à jour les styles pour centrer le projet principal
function updateSlider() {
  projects.forEach((project, index) => {
    project.classList.remove('project-main');
    if (index === currentIndex) {
      project.classList.add('project-main');
    }
  });

  // Centrer le projet principal
  const offset = -(currentIndex - 2) * 100; // Décalage basé sur l'index
  slider.style.transform = `translateX(${offset}%)`;
}

// Gère le clic sur le bouton gauche
leftButton.addEventListener('click', () => {
  currentIndex = (currentIndex > 0) ? currentIndex - 1 : projects.length - 1;
  updateSlider();
});

// Gère le clic sur le bouton droit
rightButton.addEventListener('click', () => {
  currentIndex = (currentIndex < projects.length - 1) ? currentIndex + 1 : 0;
  updateSlider();
});

// Initialisation
updateSlider();
