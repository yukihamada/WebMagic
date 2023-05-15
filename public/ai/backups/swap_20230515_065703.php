<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enabler - Swap Your Luxury</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Han+Sans:wght@300;400;500;700&display=swap');
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

    <main class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Luxury Exchange</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div>
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp" alt="Honolulu Beach House" class="w-full h-auto">
                <h3 class="text-xl font-bold mt-2">Honolulu Beach House</h3>
            </div>
            <div>
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp" alt="HondaJet" class="w-full h-auto">
                <h3 class="text-xl font-bold mt-2">HondaJet</h3>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-4">User Testimonials</h2>
        <div class="bg-gray-100 p-4 rounded">
            <p>"Enabler has made it easy for me to swap my luxury assets with others. The process is simple and secure. Highly recommended!"</p>
            <p class="mt-2 font-bold">- John Doe</p>
        </div>

        <h2 class="text-2xl font-bold mt-10 mb-4">Start Your Luxury Exchange</h2>
        <form action="" method="post">
            <div class="mb-4">
                <label for="item" class="block mb-2">What would you like to exchange?</label>
                <input type="text" name="item" id="item" class="w-full p-2 border border-gray-300 rounded" placeholder="e.g. Villa, Boat, Airplane, Car" required>
            </div>
            <div class="mb-4">
                <label for="location" class="block mb-2">Where is it located?</label>
                <input type="text" name="location" id="location" class="w-full p-2 border border-gray-300 rounded" placeholder="Address" required>
            </div>
            <div class="mb-4">
                <label for="days" class="block mb-2">How many days per year would you like to rent it out?</label>
                <select name="days" id="days" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="10">10 days</option>
                    <option value="30">30 days</option>
                    <option value="100">100 days</option>
                    <option value="330">330 days</option>
                    <option value="365">365 days</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email Address</label>
                <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block mb-2">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="w-full p-2 border border-gray-300 rounded" placeholder="Phone" required>
            </div>
            <button type="submit" class="bg-174D29 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </main>

    <footer class="bg-174D29 text-white py-4 mt-10">
        <div class="container mx-auto">
            <p>&copy; 2022 Enabler. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Add your JavaScript code here
    </script>
</body>
</html>