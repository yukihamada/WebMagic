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
            margin: 0;
        }

        .subheader {
            text-align: center;
            font-size: 24px;
            margin-bottom: 50px;
        }

        .slider {
            display: flex;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            gap: 20px;
            padding-bottom: 50px;
        }

        .slider img {
            width: 100%;
            scroll-snap-align: start;
            object-fit: cover;
            border-radius: 10px;
        }

        .info-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 50px;
        }

        .info-box {
            width: calc(25% - 20px);
            background-color: #fff;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .info-box h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .info-box p {
            font-size: 16px;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Play House Nogizaka</h1>
        </div>
        <div class="subheader">
            乃木坂駅から徒歩1分<br>
            泊まれる「大人の隠れ家空間」
        </div>
        <div class="slider">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/6a527d59a1.JPG" alt="Play House Nogizaka">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/3f8378b257.JPG" alt="Play House Nogizaka">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/b7467bb755.JPG" alt="Play House Nogizaka">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/5758980103.JPG" alt="Play House Nogizaka">
        </div>
        <div class="info-container">
            <div class="info-box">
                <h2>Information</h2>
                <p>Rooms</p>
                <p>3LDK + Sauna + Chill room</p>
            </div>
            <div class="info-box">
                <h2>Information</h2>
                <p>Size</p>
                <p>㎡</p>
            </div>
            <div class="info-box">
                <h2>Information</h2>
                <p>Capacity</p>
                <p>4名</p>
            </div>
            <div class="info-box">
                <h2>Information</h2>
                <p>Cost</p>
                <p>¥75,000~｜3,000 EBR~</p>
            </div>
        </div>
    </div>
</body>
</html>