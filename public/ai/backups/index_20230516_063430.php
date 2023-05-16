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

        .logo {
            background-color: #ef7d16;
        }
    </style>
</head>
<body>
    <header class="w-full py-4 px-6 bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="logo">
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/d50b9e275f.png" alt="Enabler Logo" class="h-10">
            </a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/all" class="text-lg font-semibold">More</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="container mx-auto py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-cover bg-center h-64 md:h-auto md:min-h-full" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/1b087d76fc.webp');"></div>
                <div class="bg-cover bg-center h-64 md:h-auto md:min-h-full" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/c355e9e28e.webp');"></div>
                <div class="bg-cover bg-center h-64 md:h-auto md:min-h-full" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/55bd262d2e.webp');"></div>
                <div class="bg-cover bg-center h-64 md:h-auto md:min-h-full" style="background-image: url('https://s3.us-west-2.amazonaws.com/enabler.fun/45846936b0.webp');"></div>
            </div>
        </section>
    </main>

    <footer class="w-full py-6 px-6 bg-white shadow-md mt-12">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-sm">
                <a href="/tearms" class="mr-4">Terms of Use</a>
                <a href="/privacy" class="mr-4">Privacy Policy</a>
                <a href="/aboutus" class="mr-4">About Us</a>
                <a href="/contact">Contact</a>
            </div>
            <div class="text-sm">
                &copy; <?php echo date("Y"); ?> Enabler. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Add your JavaScript code here
    </script>
</body>
</html>