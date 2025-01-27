'use strict';

document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let currentIndex = 0;

    function updateSlider() {
        const slideWidth = slides[0].offsetWidth + 16; // 16px pour le gap
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = Math.max(currentIndex - 1, 0);
        updateSlider();
    });

    nextBtn.addEventListener('click', () => {
        const maxIndex = slides.length - Math.floor(slider.offsetWidth / slides[0].offsetWidth);
        currentIndex = Math.min(currentIndex + 1, maxIndex);
        updateSlider();
    });

    // Mise à jour lors du redimensionnement
    window.addEventListener('resize', updateSlider);
});