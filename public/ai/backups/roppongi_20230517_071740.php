<?php
$title = "Roppongi Elegance: A Luxurious Room with a Night View and an Aquarium";
$introduction = "A spacious 56-square-meter one-bedroom apartment located in the Roppongi area, with a large aquarium tank and a wonderful night view. This private, members-only space offers a comfortable stay where you can fully enjoy the charms of Roppongi.";

$feature_points = [
    "Large aquarium: Enjoy the glowing night view and beautiful fish from the large aquarium installed in the living room.",
    "Privacy and comfort: Private members-only space, providing a relaxing environment away from the hustle and bustle of Roppongi.",
    "Luxurious facilities: A sauna is available for your ultimate relaxation."
];

$property_information = [
    "Max. number of guests" => 2,
    "Number of rooms" => "1 bedroom and 1 living room",
    "Bathrooms" => "1 bathroom, 1 shower room, 2 lavatories",
    "Sauna" => true,
    "Area" => "56 sq.m.",
    "Room Rates" => "From 40,000 yen"
];

$images = [
    "https://s3.us-west-2.amazonaws.com/enabler.fun/08a3ea2178.jpg",
    "https://s3.us-west-2.amazonaws.com/enabler.fun/a45ef403b2.jpg"
];

$access = "3 minutes walk from Roppongi station. Roppongi Midtown, Don Quijote and other popular facilities are nearby.";

$reservations = "Please visit our website for more detailed reservation information and membership registration. We also offer options based on length of stay and number of guests.";

$end = "Enjoy the luxury of a room at Roppongi Elegance. Our excellent facilities and superb location will ensure a quality stay. We look forward to your reservation.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" integrity="sha512-5tC0yAaG+plzL1MqRl5PFOr2fX/jE3DnuQp6Fg+K7hfQjKj1w7s1zj9+XlYzJr+rfxnsW1egJgBq0dP8zOFJxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #ffffff;
            color: #6d6d6d;
            font-family: 'Source Han Sans', sans-serif;
        }
    </style>
</head>
<body>
    <header class="bg-ef7d16 p-4">
        <img src="https://s3.us-west-2.amazonaws.com/c.eblr.io/fb1ce5c37d.png" alt="Enabler Logo" class="w-32 mx-auto">
    </header>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-4"><?php echo $title; ?></h1>
        <p class="mb-8"><?php echo $introduction; ?></p>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Feature Points</h2>
            <ul class="list-disc pl-8">
                <?php foreach ($feature_points as $point): ?>
                    <li><?php echo $point; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Property Information</h2>
            <ul class="grid grid-cols-2 gap-4">
                <?php foreach ($property_information as $key => $value): ?>
                    <li>
                        <strong><?php echo $key; ?>:</strong> <?php echo is_bool($value) ? ($value ? 'Yes' : 'No') : $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Images</h2>
            <div class="grid grid-cols-2 gap-4">
                <?php foreach ($images as $image): ?>
                    <div class="bg-cover bg-center h-64" style="background-image: url('<?php echo $image; ?>');"></div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Access</h2>
            <p><?php echo $access; ?></p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Reservations</h2>
            <p><?php echo $reservations; ?></p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">End</h2>
            <p><?php echo $end; ?></p>
        </section>
    </main>
</body>
</html>