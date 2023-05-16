<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $content = $_POST["content"];

    if (empty($email) || empty($content)) {
        $error = "Both email and content are required.";
    } else {
        $url = "https://discord.com/api/webhooks/1107896425041383494/Mvoai0jP57LvYX20JcFJgPz-u9Y6aLD5FRl65wQDB-5xiWwSb0zW9FH3HQinto3ylYei";
        $data = array("content" => "Email: $email\nContent: $content");
        $options = array(
            "http" => array(
                "header" => "Content-type: application/json\r\n",
                "method" => "POST",
                "content" => json_encode($data),
            ),
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === false) {
            $error = "There was an error sending your message.";
        } else {
            $success = "Your message has been sent successfully.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Han+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-600">
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold mb-8">Contact Us</h1>
        <?php if (isset($error)): ?>
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                <?= $success ?>
            </div>
        <?php endif; ?>
        <form action="/contact.php" method="post">
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block mb-2">Content</label>
                <textarea name="content" id="content" rows="5" class="w-full p-2 border border-gray-300 rounded" required></textarea>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Send</button>
        </form>
    </div>
</body>
</html>