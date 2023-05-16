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
        .slider {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-padding: 50%;
            scroll-behavior: smooth;
        }
        .slide {
            scroll-snap-align: center;
            flex-shrink: 0;
            width: 70%;
            margin-right: 10px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4">
        <h1 class="text-center text-black text-4xl font-bold my-8">Play House Nogizaka</h1>
        <p class="text-center text-xl mb-8">乃木坂駅から徒歩1分<br>泊まれる「大人の隠れ家空間」</p>
        <div class="slider">
            <img class="slide" src="https://s3.us-west-2.amazonaws.com/enabler.fun/29e470b4be.JPG" alt="Nogizaka Play House Image 1">
            <img class="slide" src="https://s3.us-west-2.amazonaws.com/enabler.fun/9a417063e2.JPG" alt="Nogizaka Play House Image 2">
            <img class="slide" src="https://s3.us-west-2.amazonaws.com/enabler.fun/2dfe489c4a.JPG" alt="Nogizaka Play House Image 3">
            <img class="slide" src="https://s3.us-west-2.amazonaws.com/enabler.fun/a12d325ad3.JPG" alt="Nogizaka Play House Image 4">
        </div>
        <div class="bg-white p-6 rounded-lg mt-8">
            <h2 class="text-center text-2xl font-bold mb-4">Information</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h3 class="text-xl font-bold">Rooms</h3>
                    <p>3LDK + Sauna + Chill room</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Size</h3>
                    <p>㎡</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Capacity</h3>
                    <p>4名</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Cost</h3>
                    <p>¥75,000~｜3,000 EBR~</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>