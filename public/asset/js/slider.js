'use strict';
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.slider-projects');
    const slides = document.querySelectorAll('.slide');
    const nextBtn = document.querySelector('.slider-button.next');
    const prevBtn = document.querySelector('.slider-button.prev');

    let currentIndex = 0;
    const slideWidth = 100 / 3; // Pour 3 slides visibles à la fois

    function updateSlider() {
        const offset = -currentIndex * slideWidth;
        slider.style.transform = `translateX(${offset}%)`;
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            if (currentIndex < slides.length - 3) { // -3 car on affiche 3 slides à la fois
                currentIndex++;
                updateSlider();
            }
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });
    }

    // Initialisation
    updateSlider();
});