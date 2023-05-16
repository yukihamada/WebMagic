<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play House Nogizaka</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            font-weight: 300;
            background-color: #dcdcdc;
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
            color: #000;
            font-weight: 300;
            margin-bottom: 20px;
        }

        .header p {
            font-size: 24px;
            color: #000;
            font-weight: 300;
        }

        .slider {
            position: relative;
            overflow: hidden;
            margin: 50px 0;
        }

        .slider img {
            width: 100%;
            height: auto;
            display: block;
        }

        .info {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .info-box {
            width: 200px;
            height: 200px;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .info-box h3 {
            font-size: 18px;
            color: #000;
            font-weight: 300;
            margin-bottom: 10px;
        }

        .info-box p {
            font-size: 16px;
            color: #000;
            font-weight: 300;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Play House Nogizaka</h1>
            <p>乃木坂駅から徒歩1分<br>泊まれる「大人の隠れ家空間」</p>
        </div>

        <div class="slider">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/6a527d59a1.JPG" alt="Play House Nogizaka">
        </div>

        <div class="info">
            <div class="info-box">
                <h3>Rooms</h3>
                <p>3LDK + Sauna + Chill room</p>
            </div>
            <div class="info-box">
                <h3>Size</h3>
                <p>㎡</p>
            </div>
            <div class="info-box">
                <h3>Capacity</h3>
                <p>4名</p>
            </div>
            <div class="info-box">
                <h3>Cost</h3>
                <p>¥75,000~｜3,000 EBR~</p>
            </div>
        </div>
    </div>
</body>
</html>