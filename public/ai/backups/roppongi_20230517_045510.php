<?php
// Database connection
require_once 'db.php';
$DB = DB();

// Fetch real estate data
$query = "SELECT * FROM real_estates WHERE title = '六本木エレガンス - 夜景と水槽を楽しむ贅沢な一室'";
$stmt = $DB->prepare($query);
$stmt->execute();
$real_estate = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>六本木エレガンス - 夜景と水槽を楽しむ贅沢な一室 | Enabler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        body {
            font-family: 'Source Han Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-600">
    <header class="bg-ef7d16 py-4">
        <div class="container mx-auto">
            <a href="/">
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/87b6a10b1c.png" alt="Enabler Logo" class="w-32 mx-auto">
            </a>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-4"><?php echo $real_estate['title']; ?></h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/08a3ea2178.jpg" alt="六本木エレガンス" class="w-full h-64 object-cover">
            </div>
            <div>
                <img src="https://s3.us-west-2.amazonaws.com/enabler.fun/a45ef403b2.jpg" alt="六本木エレガンス" class="w-full h-64 object-cover">
            </div>
        </div>

        <section class="mt-8">
            <h2 class="text-2xl font-bold mb-4">物件概要</h2>
            <p>六本木エリアに佇む高級マンションの一室をご紹介します。広々とした56平米の1LDKには、大きな水槽が設置され、素晴らしい夜景をお楽しみいただけます。会員制のプライベート空間として、六本木の魅力を存分に満喫できる快適な滞在をご提供します。</p>
        </section>

        <section class="mt-8">
            <h2 class="text-2xl font-bold mb-4">特徴ポイント</h2>
            <ul class="list-disc pl-8">
                <li>大型水槽: リビングルームに設置された大きな水槽から、美しい魚たちと共に光り輝く夜景を楽しめます。</li>
                <li>プライバシーと快適さ: 会員制のプライベート空間で、六本木の喧騒から離れたくつろぎの空間を提供します。</li>
                <li>豪華な設備: サウナを完備し、至福のリラックスタイムをお過ごしいただけます。</li>
            </ul>
        </section>

        <section class="mt-8">
            <h2 class="text-2xl font-bold mb-4">物件情報</h2>
            <p>アクセス: 六本木駅から徒歩3分。近隣には六本木ミッドタウンやドンキホーテなどの人気施設があります。</p>
        </section>

        <section class="mt-8">
            <h2 class="text-2xl font-bold mb-4">予約方法</h2>
            <p>詳細な予約情報や会員登録については、弊社ウェブサイトをご覧ください。滞在の期間や人数に応じたオプションもご用意しております。</p>
        </section>

        <section class="mt-8">
            <h2 class="text-2xl font-bold mb-4">終わりに</h2>
            <p>六本木エレガンスの一室で贅沢な時間をお過ごしください。充実した設備と素晴らしいロケーションが、上質な滞在をお約束します。ご予約お待ちしております。</p>
        </section>
    </main>

    <footer class="bg-ef7d16 py-4 mt-8">
        <div class="container mx-auto">
            <p class="text-center text-white">&copy; <?php echo date('Y'); ?> Enabler. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>