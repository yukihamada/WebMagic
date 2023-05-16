<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play House Nogizaka</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Han+Sans:300,400,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            font-weight: 300;
            color: #6d6d6d;
            background-color: #dcdcdc;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 48px;
            font-weight: 300;
            color: #000;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .subtitle {
            font-size: 24px;
            font-weight: 300;
            color: #000;
            text-align: center;
            margin-bottom: 50px;
        }

        .info-title {
            font-size: 36px;
            font-weight: 300;
            color: #000;
            text-align: center;
            margin-bottom: 20px;
        }

        .info-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .info-item {
            width: 200px;
            height: 100px;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .info-item h3 {
            font-size: 24px;
            font-weight: 300;
            color: #000;
            margin: 0;
        }

        .info-item p {
            font-size: 18px;
            font-weight: 300;
            color: #000;
            margin: 0;
        }

        .image-slider {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        .image-slider img {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .image-slider input[type="radio"] {
            display: none;
        }

        .image-slider label {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .image-slider input[type="radio"]:checked + label {
            opacity: 1;
        }

        .image-slider input[type="radio"]:checked + label + img {
            animation: slide 10s infinite;
        }

        @keyframes slide {
            0%, 20% {
                transform: translateX(0%);
            }
            25%, 45% {
                transform: translateX(-100%);
            }
            50%, 70% {
                transform: translateX(-200%);
            }
            75%, 95% {
                transform: translateX(-300%);
            }
            100% {
                transform: translateX(0%);
            }
        }
    </style>
</head>
<body>
    <h1>Play House Nogizaka</h1>
    <p class="subtitle">乃木坂駅から徒歩1分<br>泊まれる「大人の隠れ家空間」</p>
    <div class="image-slider">
        <input type="radio" name="slider" id="slide1" checked>
        <label for="slide1"></label>
        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/6a527d59a1.JPG" alt="Play House Nogizaka Image 1">
        <input type="radio" name="slider" id="slide2">
        <label for="slide2"></label>
        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/3f8378b257.JPG" alt="Play House Nogizaka Image 2">
        <input type="radio" name="slider" id="slide3">
        <label for="slide3"></label>
        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/b7467bb755.JPG" alt="Play House Nogizaka Image 3">
        <input type="radio" name="slider" id="slide4">
        <label for="slide4"></label>
        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/5758980103.JPG" alt="Play House Nogizaka Image 4">
    </div>
    <h2 class="info-title">Information</h2>
    <div class="info-container">
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
</body>
</html>