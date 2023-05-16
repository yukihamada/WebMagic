<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play House Nogizaka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            font-weight: 300;
            background-color: #dcdcdc;
        }
        h1 {
            font-size: 2.5rem;
            color: #000;
        }
        .info-box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            background-color: #ffffff;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center mb-8">Play House Nogizaka</h1>
        <p class="text-center mb-4">乃木坂駅から徒歩1分</p>
        <p class="text-center mb-8">泊まれる「大人の隠れ家空間」</p>

        <div class="swiper-container mb-8">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/6a527d59a1.JPG" alt="Play House Nogizaka" class="mx-auto">
                </div>
                <div class="swiper-slide">
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/3f8378b257.JPG" alt="Play House Nogizaka" class="mx-auto">
                </div>
                <div class="swiper-slide">
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/b7467bb755.JPG" alt="Play House Nogizaka" class="mx-auto">
                </div>
                <div class="swiper-slide">
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/5758980103.JPG" alt="Play House Nogizaka" class="mx-auto">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-8">
            <div class="info-box">
                <p class="text-center">Information</p>
            </div>
            <div class="info-box">
                <p class="text-center">**Rooms**</p>
                <p class="text-center">3LDK + Sauna + Chill room</p>
            </div>
            <div class="info-box">
                <p class="text-center">**Size**</p>
                <p class="text-center">㎡</p>
            </div>
            <div class="info-box">
                <p class="text-center">**Capacity**</p>
                <p class="text-center">4名</p>
            </div>
            <div class="info-box">
                <p class="text-center">**Cost**</p>
                <p class="text-center">¥75,000~｜3,000 EBR~</p>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>