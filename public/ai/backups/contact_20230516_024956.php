<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $slack_webhook_url = "https://******";
    $message = "New contact request:\nName: $name\nEmail: $email\nPhone: $phone";

    $ch = curl_init($slack_webhook_url);
    $payload = json_encode(array("text" => $message));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Content-Length: " . strlen($payload))
    );

    $result = curl_exec($ch);
    curl_close($ch);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Enabler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-600">
    <header class="bg-green-700 text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Enabler</h1>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
        <form action="contact.php" method="post">
            <div class="mb-4">
                <label for="name" class="block mb-2">Name</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block mb-2">Phone</label>
                <input type="tel" name="phone" id="phone" class="w-full border border-gray-300 p-2" required>
            </div>
            <button type="submit" class="bg-green-700 text-white px-4 py-2">Submit</button>
        </form>
    </main>

    <footer class="bg-green-700 text-white py-4 mt-8">
        <div class="container mx-auto">
            <p>&copy; 2022 Enabler. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>