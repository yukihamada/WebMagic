<?php
// Database connection
function DB()
{
    // Replace with your own CockroachDB connection details
    $host = "your_host";
    $port = "your_port";
    $dbname = "your_dbname";
    $user = "your_user";
    $password = "your_password";

    try {
        $DB = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $DB;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
}

$DB = DB();
$query = "SELECT * FROM real_estates";
$stmt = $DB->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nogizaka Exclusive - SWAP YOUR Luxury</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Han+Sans&display=swap">
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
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                <a href="/" class="logo">
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/87b6a10b1c.png" alt="Nogizaka Exclusive Logo" class="h-10">
                </a>
            </h1>
        </div>
    </header>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <h2 class="text-2xl font-bold leading-tight text-gray-900 mb-4">Featured Properties</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($result as $property) : ?>
                        <div class="bg-white shadow rounded-lg p-4">
                            <img src="<?= $property['image_url'] ?>" alt="<?= $property['title'] ?>" class="w-full h-48 object-cover mb-4 rounded">
                            <h3 class="text-xl font-bold mb-2"><?= $property['title'] ?></h3>
                            <p class="text-gray-600"><?= $property['description'] ?></p>
                            <div class="mt-4">
                                <span class="text-gray-900 font-bold"><?= $property['price'] ?> <?= $property['currency_code'] ?></span>
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 float-right">View Details</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 text-sm">&copy; <?= date('Y') ?> Nogizaka Exclusive. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Add your custom JavaScript here
    </script>
</body>

</html>