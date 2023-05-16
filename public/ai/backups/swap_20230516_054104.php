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
        }
    </style>
</head>
<body class="bg-white text-gray-600">
    <header class="bg-ef7d16">
        <div class="container mx-auto py-4">
            <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/87b6a10b1c.png" alt="Enabler Logo" class="w-32">
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold mb-6">Swap Your Luxury</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp" alt="Honolulu Beach House" class="w-full h-64 object-cover">
                <h2 class="text-2xl font-bold mt-4">Honolulu Beach House</h2>
            </div>
            <div>
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp" alt="HondaJet" class="w-full h-64 object-cover">
                <h2 class="text-2xl font-bold mt-4">HondaJet</h2>
            </div>
        </div>

        <section class="mt-10">
            <h2 class="text-3xl font-bold mb-4">User Reviews</h2>
            <div class="bg-gray-100 p-6 rounded-md">
                <p class="text-lg">"I had an amazing experience swapping my villa for a luxury yacht. The process was smooth and the Enabler team was very helpful throughout the entire process."</p>
                <p class="mt-4 font-bold">- John Doe</p>
            </div>
        </section>

        <section class="mt-10">
            <h2 class="text-3xl font-bold mb-4">Start Swapping</h2>
            <form action="swap.php" method="post" class="space-y-4">
                <div>
                    <label for="item" class="block text-lg font-bold">What would you like to swap?</label>
                    <input type="text" name="item" id="item" class="w-full border border-gray-300 p-2 rounded-md" placeholder="e.g. Villa, Boat, Airplane, Car" required>
                </div>
                <div>
                    <label for="location" class="block text-lg font-bold">Where is it located?</label>
                    <input type="text" name="location" id="location" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Address" required>
                </div>
                <div>
                    <label for="days" class="block text-lg font-bold">How many days per year would you like to swap?</label>
                    <select name="days" id="days" class="w-full border border-gray-300 p-2 rounded-md" required>
                        <option value="10">10 days</option>
                        <option value="30">30 days</option>
                        <option value="100">100 days</option>
                        <option value="330">330 days</option>
                        <option value="365">365 days</option>
                    </select>
                </div>
                <div>
                    <label for="email" class="block text-lg font-bold">Email Address</label>
                    <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Email" required>
                </div>
                <div>
                    <label for="phone" class="block text-lg font-bold">Phone Number</label>
                    <input type="tel" name="phone" id="phone" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Phone" required>
                </div>
                <button type="submit" class="bg-ef7d16 text-white font-bold py-2 px-4 rounded-md">Submit</button>
            </form>
        </section>
    </main>

    <script>
        document.querySelector('form').addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(e.target);
            const data = {
                item: formData.get('item'),
                location: formData.get('location'),
                days: formData.get('days'),
                email: formData.get('email'),
                phone: formData.get('phone'),
            };

            const response = await fetch('swap.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            });

            if (response.ok) {
                alert('Your information has been submitted successfully.');
                e.target.reset();
            } else {
                alert('There was an error submitting your information. Please try again.');
            }
        });
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $item = $data['item'];
    $location = $data['location'];
    $days = $data['days'];
    $email = $data['email'];
    $phone = $data['phone'];

    $message = "New Swap Request:\nItem: $item\nLocation: $location\nDays: $days\nEmail: $email\nPhone: $phone";

    $webhook_url = 'https://discord.com/api/webhooks/1107899160897785856/i_hKCiwIBmOBMW8I5oqpI_hQVxkMPboGJJxkTlLxlQa6arTx0AqIfj7GApsUGdagnPNN';
    $payload = json_encode(['content' => $message]);

    $ch = curl_init($webhook_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    http_response_code(200);
}
?>