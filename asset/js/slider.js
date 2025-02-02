
const prevButton = document.querySelector('.prev-btn');
console.log(prevButton);
const nextButton = document.querySelector('.next-btn');
console.log(nextButton);
const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
let currentIndex = 0;

nextButton.addEventListener('click', () =>{
    slider.computedStyleMap.transform = `translateX(${-currentIndex * 100}%)`;
})