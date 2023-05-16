<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enabler - Swap Your Luxury</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Han+Sans:400,700&display=swap">
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
            background-color: #ffffff;
            color: #6d6d6d;
        }

        .rounded-image {
            border-radius: 50%;
        }

        .bg-enabler {
            background-color: #ef7d16;
        }
    </style>
</head>
<body>
    <header class="bg-enabler text-white py-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <a href="/">
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/d50b9e275f.png" alt="Enabler Logo" class="h-12">
                </a>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="/all" class="hover:underline">More</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="container mx-auto py-12">
            <h1 class="text-4xl font-bold mb-8">Swap Your Luxury</h1>
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp" alt="Honolulu" class="rounded-image w-full h-64 object-cover">
                    <h2 class="text-2xl font-bold mt-4">Honolulu</h2>
                </div>
                <div>
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp" alt="HondaJet" class="rounded-image w-full h-64 object-cover">
                    <h2 class="text-2xl font-bold mt-4">HondaJet</h2>
                </div>
                <div>
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp" alt="Kyoto" class="rounded-image w-full h-64 object-cover">
                    <h2 class="text-2xl font-bold mt-4">Kyoto</h2>
                </div>
                <div>
                    <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp" alt="Tower Sauna" class="rounded-image w-full h-64 object-cover">
                    <h2 class="text-2xl font-bold mt-4">Tower Sauna</h2>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-enabler text-white py-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="/tearms" class="hover:underline">Terms of Use</a></li>
                        <li><a href="/privacy" class="hover:underline">Privacy Policy</a></li>
                        <li><a href="/aboutus" class="hover:underline">About Us</a></li>
                        <li><a href="/contact" class="hover:underline">Contact</a></li>
                    </ul>
                </nav>
                <p class="text-sm">&copy; <?php echo date('Y'); ?> Enabler. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Add your JavaScript code here
    </script>
</body>
</html>