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
    </style>
</head>
<body>
    <header class="bg-174D29 text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold">Enabler - Swap Your Luxury</h1>
        </div>
    </header>

    <section class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Featured Luxury Items</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white shadow-md rounded-md overflow-hidden">
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp" alt="Honolulu Beach House" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Honolulu Beach House</h3>
                    <p class="text-sm">Experience the luxury of a beachfront villa in Honolulu, Hawaii.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-md overflow-hidden">
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp" alt="HondaJet" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">HondaJet</h3>
                    <p class="text-sm">Travel in style with the HondaJet, a state-of-the-art private jet.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">User Testimonials</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white shadow-md rounded-md p-4">
                <p class="text-sm">"Enabler has made it easy for me to swap my luxury villa for a yacht. The process was seamless and the customer support was top-notch!"</p>
                <p class="text-sm font-bold mt-2">- John Doe</p>
            </div>
            <div class="bg-white shadow-md rounded-md p-4">
                <p class="text-sm">"I never thought I'd be able to experience the luxury of a private jet, but Enabler made it possible. Highly recommended!"</p>
                <p class="text-sm font-bold mt-2">- Jane Smith</p>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Swap Your Luxury</h2>
        <form action="https://your-webhook-url.com" method="POST">
            <div class="mb-4">
                <label for="item" class="block text-sm font-bold mb-2">What luxury item would you like to swap?</label>
                <input type="text" name="item" id="item" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-sm font-bold mb-2">Where is the item located?</label>
                <input type="text" name="location" id="location" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="days" class="block text-sm font-bold mb-2">How many days per year would you like to rent it out?</label>
                <select name="days" id="days" class="w-full border border-gray-300 rounded-md p-2" required>
                    <option value="10">10 days</option>
                    <option value="30">30 days</option>
                    <option value="100">100 days</option>
                    <option value="330">330 days</option>
                    <option value="365">365 days</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">Email Address</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-bold mb-2">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <button type="submit" class="bg-174D29 text-white font-bold py-2 px-4 rounded-md">Submit</button>
        </form>
    </section>

    <footer class="bg-174D29 text-white py-4 mt-8">
        <div class="container mx-auto">
            <p class="text-sm">&copy; 2022 Enabler. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>