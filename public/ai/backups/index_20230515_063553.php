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
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .rounded-image {
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
    <header class="bg-white py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center">Enabler - Swap Your Luxury</h1>
        </div>
    </header>

    <main>
        <section class="py-8">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl mb-4">Featured Luxury Items</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp" alt="Honolulu" class="rounded-t-lg w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl mb-2">Honolulu Villa</h3>
                            <p class="text-sm">Experience the beauty of Honolulu in this luxurious villa with stunning ocean views and top-notch amenities.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp" alt="HondaJet" class="rounded-t-lg w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl mb-2">HondaJet Elite</h3>
                            <p class="text-sm">Travel in style with the HondaJet Elite, offering unparalleled performance, efficiency, and comfort.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp" alt="Kyoto" class="rounded-t-lg w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl mb-2">Kyoto Traditional House</h3>
                            <p class="text-sm">Immerse yourself in Japanese culture by staying in this beautifully preserved traditional house in Kyoto.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp" alt="Tower Sauna" class="rounded-t-lg w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl mb-2">Tower Sauna Suite</h3>
                            <p class="text-sm">Relax and rejuvenate in this luxurious sauna suite, featuring a private sauna, steam room, and plunge pool.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-8">
                    <a href="/all" class="text-lg font-semibold">More Luxury Items</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-white py-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center">
                <a href="/tearms" class="mx-2">Terms of Use</a>
                <a href="/privacy" class="mx-2">Privacy Policy</a>
                <a href="/aboutus" class="mx-2">About Us</a>
            </div>
            <p class="text-center mt-4">&copy; <?= date('Y') ?> Enabler. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>