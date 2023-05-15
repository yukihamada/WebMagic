<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enabler - Swap Your Luxury</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
            background-color: #ffffff;
            color: #6d6d6d;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
        }

        a {
            color: #174D29;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .rounded-img {
            border-radius: 50%;
        }

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <header class="bg-174D29 text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-3xl">Enabler - Swap Your Luxury</h1>
        </div>
    </header>

    <nav class="bg-white py-4">
        <div class="container mx-auto">
            <ul class="flex justify-around">
                <li><a href="#honolulu">Honolulu</a></li>
                <li><a href="#hondajet">HondaJet</a></li>
                <li><a href="#kyoto">Kyoto</a></li>
                <li><a href="#towersauna">Tower Sauna</a></li>
                <li><a href="/all">More</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section id="honolulu" class="parallax" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp'); min-height: 400px;">
            <div class="container mx-auto py-16">
                <h2 class="text-2xl text-white">Honolulu</h2>
            </div>
        </section>

        <section id="hondajet" class="parallax" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp'); min-height: 400px;">
            <div class="container mx-auto py-16">
                <h2 class="text-2xl text-white">HondaJet</h2>
            </div>
        </section>

        <section id="kyoto" class="parallax" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp'); min-height: 400px;">
            <div class="container mx-auto py-16">
                <h2 class="text-2xl text-white">Kyoto</h2>
            </div>
        </section>

        <section id="towersauna" class="parallax" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp'); min-height: 400px;">
            <div class="container mx-auto py-16">
                <h2 class="text-2xl text-white">Tower Sauna</h2>
            </div>
        </section>
    </main>

    <footer class="bg-174D29 text-white py-4">
        <div class="container mx-auto">
            <ul class="flex justify-around">
                <li><a href="/tearms">Terms of Use</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/aboutus">About Us</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>