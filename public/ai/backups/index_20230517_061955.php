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
            background-color: #ef7d16;
        }
    </style>
</head>
<body>
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div>
                    <a href="/" class="text-xl font-semibold text-gray-800">
                        <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/87b6a10b1c.png" alt="Enabler Logo" class="logo">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/all" class="py-4 px-2 text-gray-500 border-b-4 border-transparent hover:border-green-500">More</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="bg-cover bg-center h-auto text-white py-24 px-6" style="background-image: url(https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp);">
            <div class="container mx-auto">
                <h1 class="text-4xl font-bold mb-3">SWAP YOUR Luxury</h1>
                <p class="text-2xl mb-8">Experience the finest luxury assets with Enabler</p>
            </div>
        </section>

        <!-- Asset Showcase -->
        <section class="container mx-auto py-12 px-6">
            <h2 class="text-3xl font-bold mb-6">Featured Assets</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $assets = [
                    [
                        'title' => 'Atami',
                        'description' => 'Oceanfront white house.',
                        'image' => 'https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp',
                        'link' => '/atami'
                    ],
                    [
                        'title' => 'Tower Sauna',
                        'description' => 'Relax and unwind in this luxurious tower sauna.',
                        'image' => 'https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp',
                        'link' => '/towersauna'
                    ],
                    [
                        'title' => 'Kyoto',
                        'description' => 'Experience traditional Japanese luxury in Kyoto.',
                        'image' => 'https://s3.us-west-2.amazonaws.com/c.eblr.io/83b183e0c5.jpeg',
                        'link' => '/kyoto'
                    ],
                    [
                        'title' => 'Honolulu',
                        'description' => 'Experience luxury in the heart of Honolulu oceanfront.',
                        'image' => 'https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp',
                        'link' => '/honolulu'
                    ],
                    [
                        'title' => 'HondaJet',
                        'description' => 'Travel in style with the luxurious HondaJet in Japan.',
                        'image' => 'https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp',
                        'link' => '/hondajet'
                    ],
                ];

                foreach ($assets as $asset) {
                    echo <<<HTML
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <img src="{$asset['image']}" alt="{$asset['title']}" class="w-full h-56 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{$asset['title']}</h3>
                            <p class="text-gray-600 mb-4">{$asset['description']}</p>
                            <a href="{$asset['link']}" class="text-green-500 font-semibold">Learn More</a>
                        </div>
                    </div>
                    HTML;
                }
                ?>
            </div>
        </section>

        <!-- Trust & Safety Section -->
        <section class="bg-green-500 text-white py-12 px-6">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-6">Trust & Safety</h2>
                <p class="text-xl mb-8">We prioritize security and reliability with our secure payment system, rating and review system, and rapid customer support.</p>
            </div>
        </section>

        <!-- Newsletter Signup -->
        <section class="container mx-auto py-12 px-6">
            <h2 class="text-3xl font-bold mb-6">Stay Updated</h2>
            <p class="text-xl mb-8">Sign up for our newsletter to receive the latest news and updates from Enabler.</p>
            <form action="#" method="post">
                <div class="flex items-center">
                    <input type="email" name="email" placeholder="Your email address" class="w-full px-4 py-2 text-gray-800 bg-white border border-gray-300 rounded-md">
                    <button type="submit" class="ml-4 px-4 py-2 bg-green-500 text-white font-semibold rounded-md">Subscribe</button>
                </div>
            </form>
        </section>

        <!-- Social Proof -->
        <section class="container mx-auto py-12 px-6">
            <h2 class="text-3xl font-bold mb-6">Follow Us</h2>
            <div class="flex items-center space-x-4">
                <a href="https://www.instagram.com/enabler.fun/" target="_blank" class="text-green-500 hover:text-green-700">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://twitter.com/Enablerofficial" target="_blank" class="text-green-500 hover:text-green-700">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-white shadow">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div>
                    <a href="/" class="text-xl font-semibold text-gray-800">
                        <img src="https://s3.us-west-2.amazonaws.com/c.eblr.io/fb1ce5c37d.png" alt="Enabler Logo" class="logo">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/tearms" class="py-4 px-2 text-gray-500 border-b-4 border-transparent hover:border-green-500">Terms</a>
                    <a href="/privacy" class="py-4 px-2 text-gray-500 border-b-4 border-transparent hover:border-green-500">Privacy</a>
                    <a href="/aboutus" class="py-4 px-2 text-gray-500 border-b-4 border-transparent hover:border-green-500">About Us</a>
                    <a href="/contact" class="py-4 px-2 text-gray-500 border-b-4 border-transparent hover:border-green-500">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>