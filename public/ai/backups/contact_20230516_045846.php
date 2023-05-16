<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["message"];

    $data = array(
        "content" => "Email: " . $email . "\nMessage: " . $message
    );

    $webhook = "https://discord.com/api/webhooks/1107892906087432222/YgmmDXN6n-C-cnZZi7Sl99rBcM5479bkJ6jKz6zcX6JWxVRBv9hTHZ0Ljtx453eQlxqb";
    $options = array(
        "http" => array(
            "header" => "Content-type: application/json\r\n",
            "method" => "POST",
            "content" => json_encode($data)
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($webhook, false, $context);

    if ($result === FALSE) {
        echo "Error sending message.";
    } else {
        echo "Message sent successfully.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Han+Sans" rel="stylesheet">
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
            background-color: #ffffff;
            color: #6d6d6d;
        }

        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #174D29;
            color: #ffffff;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            background-color: #ffffff;
            color: #6d6d6d;
            font-family: 'Source Han Sans', sans-serif;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #6d6d6d;
            color: #ffffff;
            font-family: 'Source Han Sans', sans-serif;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ffffff;
            color: #6d6d6d;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="5" required></textarea>

        <input type="submit" value="Send Message">
    </form>
</body>
</html>