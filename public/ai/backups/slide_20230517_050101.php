<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nogizaka Exclusive: Your Premier Global Luxury Marketplace</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Han+Sans&display=swap" />
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
            background-color: #ffffff;
            color: #6d6d6d;
        }
        .logo {
            background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/87b6a10b1c.png');
            background-size: cover;
            width: 200px;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4">
        <header class="flex justify-between items-center py-6">
            <div class="logo"></div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-lg font-semibold">Home</a></li>
                    <li><a href="#" class="text-lg font-semibold">Browse</a></li>
                    <li><a href="#" class="text-lg font-semibold">About</a></li>
                    <li><a href="#" class="text-lg font-semibold">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="text-center py-12">
                <h1 class="text-4xl font-bold mb-6">Introducing Nogizaka Exclusive: Your Premier Global Luxury Marketplace</h1>
                <p class="text-xl">Discover the epitome of luxury living with Nogizaka Exclusive, your premier global luxury marketplace for renting, buying, and selling high-end assets in the prestigious Nogizaka neighborhood. With our user-friendly interface, secure payment system, and advanced features, Nogizaka Exclusive elevates your lifestyle by providing access to an exclusive collection of homes, villas, cars, boats, and airplanes.</p>
            </section>
            <section class="grid grid-cols-3 gap-8 py-12">
                <div class="bg-174D29 text-white p-6 rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Reliable and Secure Transactions</h2>
                    <p>Our secure payment system, coupled with our rating and review system, ensures the utmost reliability and trust in every transaction.</p>
                </div>
                <div class="bg-174D29 text-white p-6 rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Cutting-edge Technology</h2>
                    <p>Utilizing blockchain technology, machine learning, and AI, our platform offers personalized recommendations, added security, and seamless user experience.</p>
                </div>
                <div class="bg-174D29 text-white p-6 rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Comprehensive Management</h2>
                    <p>From user authentication to property and item management, our platform offers advanced features for ease of use and total control.</p>
                </div>
                <div class="bg-174D29 text-white p-6 rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Exclusive Access</h2>
                    <p>Participate in live commerce, auctions, and streaming events, giving you unique access to rare and highly sought-after assets.</p>
                </div>
                <div class="bg-174D29 text-white p-6 rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Social Integration and Rewards</h2>
                    <p>Engage with our community through social media integration, earn points, and redeem rewards for exclusive offers and discounts.</p>
                </div>
                <div class="bg-174D29 text-white p-6 rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Real-time Updates</h2>
                    <p>Stay informed with push notifications, providing the latest deals, events, and updates in the luxury marketplace.</p>
                </div>
            </section>
        </main>
        <footer class="text-center py-6">
            <p class="text-lg">&copy; <?php echo date('Y'); ?> Nogizaka Exclusive. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>