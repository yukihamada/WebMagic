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

        .logo {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div>
                    <a href="/" class="text-2xl font-bold text-gray-800">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/d50b9e275f.png" alt="Enabler Logo" class="logo">
                    </a>
                </div>
                <div class="hidden md:flex items-center">
                    <nav class="text-gray-800">
                        <a href="/all" class="mx-2 py-1 px-3 rounded">More</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-cover bg-center h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp')">
                    <a href="#" class="block w-full h-full opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-black bg-opacity-50 p-4">
                            <h2 class="text-white text-xl font-bold">Honolulu</h2>
                        </div>
                    </a>
                </div>
                <div class="bg-cover bg-center h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp')">
                    <a href="#" class="block w-full h-full opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-black bg-opacity-50 p-4">
                            <h2 class="text-white text-xl font-bold">HondaJet</h2>
                        </div>
                    </a>
                </div>
                <div class="bg-cover bg-center h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp')">
                    <a href="#" class="block w-full h-full opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-black bg-opacity-50 p-4">
                            <h2 class="text-white text-xl font-bold">Kyoto</h2>
                        </div>
                    </a>
                </div>
                <div class="bg-cover bg-center h-64" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp')">
                    <a href="#" class="block w-full h-full opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-black bg-opacity-50 p-4">
                            <h2 class="text-white text-xl font-bold">Tower Sauna</h2>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-white border-t border-gray-200">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <a href="/tearms" class="text-gray-600 hover:text-gray-800">Terms of Use</a>
                    <span class="mx-2 text-gray-600">|</span>
                    <a href="/privacy" class="text-gray-600 hover:text-gray-800">Privacy Policy</a>
                    <span class="mx-2 text-gray-600">|</span>
                    <a href="/aboutus" class="text-gray-600 hover:text-gray-800">About Us</a>
                    <span class="mx-2 text-gray-600">|</span>
                    <a href="/contact" class="text-gray-600 hover:text-gray-800">Contact</a>
                </div>
                <div>
                    <p class="text-gray-600">&copy; <?php echo date("Y"); ?> Enabler. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>