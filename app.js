document.addEventListener("DOMContentLoaded", function() {
    const prevButton = document.querySelector('.prev-btn');
    const nextButton = document.querySelector('.next-btn');
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;

    const updateSliderPosition = () => {
        slider.style.transform = `translateX(${-currentIndex * 100}%)`;
    };

    nextButton.addEventListener('click', function() {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSliderPosition();
    });

    prevButton.addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = slides.length - 1;
        }
        updateSliderPosition();
    });
});