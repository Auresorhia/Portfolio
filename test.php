<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Simple</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .slider-container {
            position: relative;
            width: 80%;
            max-width: 1000px;
            overflow: hidden;
        }

        .slider {
            display: flex;
            transition: transform 0.3s ease;
            gap: 10px;
        }

        .slide {
            min-width: 50%;
        }

        .slide img {
            width: 100%;
            height: auto;
        }

        .prev-btn, .next-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 1.5rem;
            z-index: 10;
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .prev-btn:hover, .next-btn:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>

    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d" alt="Image 1">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158" alt="Image 2">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Image 3">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b" alt="Image 4">
            </div>
        </div>
        <button class="prev-btn">&lt;</button>
        <button class="next-btn">&gt;</button>
    </div>

    <script>
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
    </script>

</body>
</html>
