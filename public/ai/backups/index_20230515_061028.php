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

        .rounded-img {
            border-radius: 10px;
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
            <h1 class="text-3xl font-bold">Enabler</h1>
            <p class="text-xl">Swap Your Luxury</p>
        </div>
    </header>

    <nav class="bg-white py-4">
        <div class="container mx-auto">
            <ul class="flex justify-around">
                <li><a href="#villas" class="text-lg">Villas</a></li>
                <li><a href="#cars" class="text-lg">Cars</a></li>
                <li><a href="#boats" class="text-lg">Boats</a></li>
                <li><a href="#airplanes" class="text-lg">Airplanes</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section id="villas" class="py-8">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-4">Luxury Villas</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="parallax rounded-img h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp');"></div>
                    <div class="parallax rounded-img h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp');"></div>
                </div>
            </div>
        </section>

        <section id="cars" class="py-8">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-4">Luxury Cars</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="parallax rounded-img h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp');"></div>
                </div>
            </div>
        </section>

        <section id="boats" class="py-8">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-4">Luxury Boats</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="parallax rounded-img h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp');"></div>
                </div>
            </div>
        </section>

        <section id="airplanes" class="py-8">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-4">Luxury Airplanes</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="parallax rounded-img h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp');"></div>
                </div>
            </div>
        </section>

        <section class="py-8">
            <div class="container mx-auto">
                <a href="/all" class="text-2xl font-bold">More Luxury Items</a>
            </div>
        </section>
    </main>

    <footer class="bg-174D29 text-white py-4">
        <div class="container mx-auto">
            <ul class="flex justify-around">
                <li><a href="/tearms" class="text-lg">Terms of Service</a></li>
                <li><a href="/privacy" class="text-lg">Privacy Policy</a></li>
                <li><a href="/aboutus" class="text-lg">About Us</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>