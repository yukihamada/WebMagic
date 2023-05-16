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
        .hero {
            background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #ffffff;
        }
        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 24px;
        }
        .hero p {
            font-size: 24px;
            font-weight: 400;
        }
    </style>
</head>
<body>
    <header class="bg-white py-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <a href="/">
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/d50b9e275f.png" alt="Enabler Logo" class="h-12">
                </a>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="/honolulu">Honolulu</a></li>
                        <li><a href="/hondajet">HondaJet</a></li>
                        <li><a href="/atami">Atami</a></li>
                        <li><a href="/towersauna">Tower Sauna</a></li>
                        <li><a href="/all">More</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero">
        <div>
            <h1>SWAP YOUR Luxury</h1>
            <p>Experience the finest luxury assets</p>
        </div>
    </section>

    <section class="container mx-auto py-12">
        <h2 class="text-center text-3xl font-semibold mb-8">Featured Assets</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $assets = [
                [
                    'title' => 'Honolulu',
                    'description' => 'Experience luxury in the heart of Honolulu. Ocean front.',
                    'image' => 'https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp',
                    'link' => '/honolulu'
                ],
                [
                    'title' => 'HondaJet',
                    'description' => 'Travel in style with the luxurious HondaJet in Japan.',
                    'image' => 'https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp',
                    'link' => '/hondajet'
                ],
                [
                    'title' => 'Atami',
                    'description' => 'Ocean front white house.',
                    'image' => 'https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp',
                    'link' => '/atami'
                ],
                [
                    'title' => 'Tower Sauna',
                    'description' => 'Relax and unwind in this luxurious tower sauna.',
                    'image' => 'https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp',
                    'link' => '/towersauna'
                ],
            ];

            foreach ($assets as $asset) {
                echo '<div class="bg-white shadow-lg rounded-lg overflow-hidden">';
                echo '<a href="' . $asset['link'] . '">';
                echo '<img src="' . $asset['image'] . '" alt="' . $asset['title'] . '" class="w-full h-64 object-cover">';
                echo '</a>';
                echo '<div class="p-6">';
                echo '<h3 class="text-xl font-semibold mb-2">' . $asset['title'] . '</h3>';
                echo '<p class="text-base">' . $asset['description'] . '</p>';
                echo '<a href="' . $asset['link'] . '" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto">
            <h2 class="text-center text-3xl font-semibold mb-8">Trust & Safety</h2>
            <p class="text-center">At Enabler, we prioritize the security and satisfaction of our customers. Our secure payment system, rating and review system, and rapid customer support ensure a seamless and enjoyable experience.</p>
        </div>
    </section>

    <section class="container mx-auto py-12">
        <h2 class="text-center text-3xl font-semibold mb-8">Stay Updated</h2>
        <p class="text-center mb-4">Sign up for our newsletter to receive the latest news and updates from Enabler.</p>
        <form action="#" method="post" class="text-center">
            <input type="email" name="email" placeholder="Enter your email" class="border border-gray-300 rounded-md px-4 py-2 w-full md:w-1/2">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-md mt-4">Subscribe</button>
        </form>
    </section>

    <footer class="bg-white py-8">
        <div class="container mx-auto">
            <div class="flex justify-center space-x-4">
                <a href="/tearms">Terms of Use</a>
                <a href="/privacy">Privacy Policy</a>
                <a href="/aboutus">About Us</a>
                <a href="/contact">Contact</a>
            </div>
            <div class="text-center mt-4">
                <a href="https://www.instagram.com/enabler.fun/" target="_blank" class="text-indigo-600 hover:text-indigo-800">Instagram</a>
                <span class="mx-2">|</span>
                <a href="https://twitter