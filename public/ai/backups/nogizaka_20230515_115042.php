<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play House Nogizaka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Han+Sans:wght@300;400;500;700&display=swap');
        body {
            font-family: 'Source Han Sans', sans-serif;
            background-color: #dcdcdc;
        }
        .slide {
            display: none;
        }
        .slide.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-black mb-4">Play House Nogizaka</h1>
        <p class="text-lg mb-8">乃木坂駅から徒歩1分<br>泊まれる「大人の隠れ家空間」</p>

        <div class="slider w-full mb-8">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/29e470b4be.JPG" alt="Nogizaka Play House Image 1" class="slide active w-full h-auto">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/9a417063e2.JPG" alt="Nogizaka Play House Image 2" class="slide w-full h-auto">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/2dfe489c4a.JPG" alt="Nogizaka Play House Image 3" class="slide w-full h-auto">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/a12d325ad3.JPG" alt="Nogizaka Play House Image 4" class="slide w-full h-auto">
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h2 class="text-xl font-bold mb-2">Rooms</h2>
                    <p>3LDK + Sauna + Chill room</p>
                </div>
                <div>
                    <h2 class="text-xl font-bold mb-2">Size</h2>
                    <p>㎡</p>
                </div>
                <div>
                    <h2 class="text-xl font-bold mb-2">Capacity</h2>
                    <p>4名</p>
                </div>
                <div>
                    <h2 class="text-xl font-bold mb-2">Cost</h2>
                    <p>¥75,000~｜3,000 EBR~</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function changeSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        setInterval(changeSlide, 3000);
    </script>
</body>
</html>