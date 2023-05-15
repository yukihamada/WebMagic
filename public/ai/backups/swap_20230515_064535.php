<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enabler - Swap Your Luxury</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Han+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
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
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Swap Your Luxury</h1>
        <form id="swapForm" class="space-y-4">
            <div>
                <label for="item" class="block text-lg font-medium">What luxury item would you like to swap?</label>
                <input type="text" id="item" name="item" class="w-full border border-gray-300 rounded-md py-2 px-3" placeholder="Villa, boat, airplane, car, etc." required>
            </div>
            <div>
                <label for="location" class="block text-lg font-medium">Where is the item located?</label>
                <input type="text" id="location" name="location" class="w-full border border-gray-300 rounded-md py-2 px-3" placeholder="Address" required>
            </div>
            <div>
                <label for="days" class="block text-lg font-medium">How many days per year would you like to rent it out?</label>
                <select id="days" name="days" class="w-full border border-gray-300 rounded-md py-2 px-3" required>
                    <option value="10">10 days</option>
                    <option value="30">30 days</option>
                    <option value="100">100 days</option>
                    <option value="330">330 days</option>
                    <option value="365">365 days</option>
                </select>
            </div>
            <div>
                <label for="email" class="block text-lg font-medium">Your email address</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3" placeholder="Email" required>
            </div>
            <div>
                <label for="phone" class="block text-lg font-medium">Your phone number</label>
                <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-md py-2 px-3" placeholder="Phone" required>
            </div>
            <button type="submit" class="w-full bg-#174D29 text-white font-bold py-2 px-4 rounded-md">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById("swapForm").addEventListener("submit", async (e) => {
            e.preventDefault();

            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData.entries());

            // Send data to Discord channel via webhook
            const webhookUrl = "YOUR_DISCORD_WEBHOOK_URL";
            const response = await fetch(webhookUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    content: `New swap request:\nItem: ${data.item}\nLocation: ${data.location}\nDays: ${data.days}\nEmail: ${data.email}\nPhone: ${data.phone}`,
                }),
            });

            if (response.ok) {
                alert("Your swap request has been submitted successfully!");
                e.target.reset();
            } else {
                alert("An error occurred while submitting your swap request. Please try again.");
            }
        });
    </script>
</body>
</html>