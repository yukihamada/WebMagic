<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enabler - Swap Your Luxury</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Han+Sans:400,700&display=swap">
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
            background-color: #ffffff;
            color: #6d6d6d;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }

        a {
            color: #174D29;
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
                <li><a href="#villas">Villas</a></li>
                <li><a href="#cars">Cars</a></li>
                <li><a href="#boats">Boats</a></li>
                <li><a href="#airplanes">Airplanes</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section id="villas" class="parallax" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp'); min-height: 600px;">
            <div class="container mx-auto text-center py-20">
                <h2 class="text-4xl text-white">Luxury Villas</h2>
                <p class="text-xl text-white">Experience the finest luxury villas in the world.</p>
            </div>
        </section>

        <section id="cars" class="parallax" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp'); min-height: 600px;">
            <div class="container mx-auto text-center py-20">
                <h2 class="text-4xl text-white">Luxury Cars</h2>
                <p class="text-xl text-white">Drive the most exclusive cars on the planet.</p>
            </div>
        </section>

        <section id="boats" class="parallax" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp'); min-height: 600px;">
            <div class="container mx-auto text-center py-20">
                <h2 class="text-4xl text-white">Luxury Boats</h2>
                <p class="text-xl text-white">Sail the seas in style with our luxurious boats.</p>
            </div>
        </section>

        <section id="airplanes" class="parallax" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp'); min-height: 600px;">
            <div class="container mx-auto text-center py-20">
                <h2 class="text-4xl text-white">Luxury Airplanes</h2>
                <p class="text-xl text-white">Fly high in the sky with our top-of-the-line airplanes.</p>
            </div>
        </section>

        <section class="bg-white py-10">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl">Discover More</h2>
                <p class="text-xl">Explore our full collection of luxury assets.</p>
                <a href="/all" class="text-2xl text-174D29">View All</a>
            </div>
        </section>
    </main>

    <footer class="bg-174D29 text-white py-4">
        <div class="container mx-auto text-center">
            <ul class="flex justify-around">
                <li><a href="/tearms">Terms of Use</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/aboutus">About Us</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>