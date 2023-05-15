<?php
$title = "About Us - Enabler";
$description = "Learn more about Enabler, our team, and our mission to maximize the value of luxury assets through technology.";
$keywords = "Enabler, luxury assets, team, mission";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/17.0.2/umd/react.production.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/17.0.2/umd/react-dom.production.min.js"></script>
</head>
<body class="bg-white text-gray-600 font-source-han-sans">
    <header class="bg-f4b404 text-white py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Enabler</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-4">Our Team</h2>
            <ul class="space-y-4">
                <li>
                    <h3 class="text-2xl font-semibold">Tenichi Liu</h3>
                    <p>Co-Founder & CPO, Enabler Inc. | CEO, Enabler U.S.</p>
                </li>
                <li>
                    <h3 class="text-2xl font-semibold">Kojiro Myojin (Jiro)</h3>
                    <p>Co-Founder & CMO, Enabler Inc.</p>
                </li>
                <li>
                    <h3 class="text-2xl font-semibold">George Kitahama</h3>
                    <p>Co-Founder & COO, Enabler Inc.</p>
                </li>
                <li>
                    <h3 class="text-2xl font-semibold">Yuki Hamada</h3>
                    <p>Co-Founder & CEO, Enabler Inc.</p>
                </li>
                <li>
                    <h3 class="text-2xl font-semibold">Yuki Kanayama</h3>
                    <p>Executive Advisor</p>
                </li>
            </ul>
        </section>

        <section>
            <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
            <p class="text-xl">Enabler is a global marketplace for renting, buying, and selling high-end assets such as homes, villas, cars, boats, and airplanes.</p>
            <p class="text-xl mt-4">Swap Your Luxury = "Maximize the value of luxury assets through technology."</p>
        </section>
    </main>

    <footer class="bg-f4b404 text-white py-4">
        <div class="container mx-auto px-4">
            <p class="text-center">&copy; <?php echo date("Y"); ?> Enabler. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>