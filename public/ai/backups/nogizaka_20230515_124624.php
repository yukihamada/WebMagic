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
            color: #6d6d6d;
            margin-bottom: 50px;
        }

        .slider {
            display: flex;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .slider img {
            width: 100%;
            scroll-snap-align: start;
            object-fit: cover;
            max-height: 400px;
        }

        .info {
            background-color: #ffffff;
            padding: 50px;
            margin-bottom: 50px;
            text-align: center;
        }

        .info h2 {
            font-size: 36px;
            color: #6d6d6d;
            margin-bottom: 30px;
        }

        .info-details {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .info-item {
            width: 20%;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        .info-item h3 {
            font-size: 24px;
            color: #6d6d6d;
            margin-bottom: 10px;
        }

        .info-item p {
            font-size: 18px;
            color: #6d6d6d;
            margin: 0;
        }

        @media (max-width: 768px) {
            .info-details {
                flex-direction: column;
            }

            .info-item {
                width: 100%;
            }
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
    </div>
</body>
</html>