<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play House Nogizaka</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Han+Sans:300,400,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
            background-color: #dcdcdc;
            color: #6d6d6d;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            text-align: center;
            padding: 50px 0;
        }

        .header h1 {
            font-size: 48px;
            font-weight: 300;
            color: #000;
            margin-bottom: 20px;
        }

        .header p {
            font-size: 24px;
            font-weight: 300;
        }

        .info {
            background-color: #ffffff;
            padding: 40px;
            margin-bottom: 40px;
            text-align: center;
        }

        .info h2 {
            font-size: 36px;
            font-weight: 300;
            margin-bottom: 20px;
        }

        .info-details {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .info-item {
            width: 25%;
            padding: 20px;
            box-sizing: border-box;
            text-align: left;
        }

        .info-item h3 {
            font-size: 24px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        .info-item p {
            font-size: 18px;
            font-weight: 300;
        }

        .slider {
            position: relative;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .slider img {
            width: 100%;
            height: auto;
            display: none;
        }

        .slider img.active {
            display: block;
        }

        .slider-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .slider-controls button {
            background-color: #174D29;
            border: none;
            color: #ffffff;
            font-size: 18px;
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
        }
    </style>
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            const sliderImages = document.querySelectorAll('.slider img');
            let currentImage = 0;

            function changeImage() {
                sliderImages[currentImage].classList.remove('active');
                currentImage = (currentImage + 1) % sliderImages.length;
                sliderImages[currentImage].classList.add('active');
            }

            setInterval(changeImage, 3000);
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Play House Nogizaka</h1>
            <p>乃木坂駅から徒歩1分<br>泊まれる「大人の隠れ家空間」</p>
        </div>

        <div class="info">
            <h2>Information</h2>
            <div class="info-details">
                <div class="info-item">
                    <h3>Rooms</h3>
                    <p>3LDK + Sauna + Chill room</p>
                </div>
                <div class="info-item">
                    <h3>Size</h3>
                    <p>㎡</p>
                </div>
                <div class="info-item">
                    <h3>Capacity</h3>
                    <p>4名</p>
                </div>
                <div class="info-item">
                    <h3>Cost</h3>
                    <p>¥75,000~｜3,000 EBR~</p>
                </div>
            </div>
        </div>

        <div class="slider">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/29e470b4be.JPG" alt="Nogizaka Play House Image 1" class="active">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/9a417063e2.JPG" alt="Nogizaka Play House Image 2">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/2dfe489c4a.JPG" alt="Nogizaka Play House Image 3">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/a12d325ad3.JPG" alt="Nogizaka Play House Image 4">
        </div>
    </div>
</body>
</html>