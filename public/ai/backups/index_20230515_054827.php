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

        .bg-yellow {
            background-color: #f4b404;
        }

        .text-yellow {
            color: #f4b404;
        }
    </style>
</head>
<body>
    <header class="bg-yellow text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold">Enabler</h1>
            <p class="text-xl">Swap Your Luxury</p>
        </div>
    </header>

    <nav class="bg-white py-4">
        <div class="container mx-auto">
            <ul class="flex justify-around">
                <li><a href="#" class="text-yellow">Villas</a></li>
                <li><a href="#">Cars</a></li>
                <li><a href="#">Boats</a></li>
                <li><a href="#">Airplanes</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section class="container mx-auto py-8">
            <h2 class="text-3xl font-bold mb-4">Featured Luxury Items</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp" alt="Honolulu" class="w-full h-64 object-cover">
                    <h3 class="text-2xl font-bold mt-2">Honolulu Villa</h3>
                </div>
                <div>
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp" alt="HondaJet" class="w-full h-64 object-cover">
                    <h3 class="text-2xl font-bold mt-2">HondaJet</h3>
                </div>
                <div>
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp" alt="Kyoto" class="w-full h-64 object-cover">
                    <h3 class="text-2xl font-bold mt-2">Kyoto Villa</h3>
                </div>
                <div>
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp" alt="Tower Sauna" class="w-full h-64 object-cover">
                    <h3 class="text-2xl font-bold mt-2">Tower Sauna</h3>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="/all" class="text-yellow font-bold text-xl">More Luxury Items</a>
            </div>
        </section>
    </main>

    <footer class="bg-yellow text-white py-4">
        <div class="container mx-auto">
            <ul class="flex justify-around">
                <li><a href="/tearms">Terms of Use</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/aboutus">About Us</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Add your JavaScript code here
    </script>
</body>
</html>