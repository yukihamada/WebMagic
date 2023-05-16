<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play House Nogizaka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');
        body {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 300;
        }
    </style>
</head>
<body class="bg-gray-200">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-black text-4xl">Play House Nogizaka</h1>
        <p class="text-center text-gray-700 mt-2">乃木坂駅から徒歩1分</p>
        <p class="text-center text-gray-700">泊まれる「大人の隠れ家空間」</p>

        <div class="mt-8">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/29e470b4be.JPG" alt="Nogizaka Play House" class="w-full h-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/9a417063e2.JPG" alt="Nogizaka Play House" class="w-full h-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/2dfe489c4a.JPG" alt="Nogizaka Play House" class="w-full h-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/a12d325ad3.JPG" alt="Nogizaka Play House" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-center text-gray-700 text-2xl">Information</h2>
            <div class="bg-white p-4 rounded-lg mt-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h3 class="text-gray-700">Rooms</h3>
                        <p>3LDK + Sauna + Chill room</p>
                    </div>
                    <div>
                        <h3 class="text-gray-700">Size</h3>
                        <p>㎡</p>
                    </div>
                    <div>
                        <h3 class="text-gray-700">Capacity</h3>
                        <p>4名</p>
                    </div>
                    <div>
                        <h3 class="text-gray-700">Cost</h3>
                        <p>¥75,000~｜3,000 EBR~</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>