<?php
session_start();

// Database connection
require_once 'db.php';

// Error messages
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate username
    if (empty($_POST['username'])) {
        $errors['username'] = 'ユーザー名は必須です。';
    } elseif (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
        $errors['username'] = 'ユーザー名は、アルファベットと数字のみを使用してください。';
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors['password'] = 'パスワードは必須です。';
    } elseif (strlen($_POST['password']) < 8 || !preg_match('/[A-Za-z]/', $_POST['password']) || !preg_match('/[0-9]/', $_POST['password']) || !preg_match('/[\W]/', $_POST['password'])) {
        $errors['password'] = 'パスワードは、少なくとも8文字以上で、大文字と小文字の両方、数字、そして記号を含める必要があります。';
    }

    // Validate password confirmation
    if ($_POST['password'] !== $_POST['password_confirmation']) {
        $errors['password_confirmation'] = 'パスワードが一致しません。';
    }

    // Validate email
    if (empty($_POST['email'])) {
        $errors['email'] = 'メールアドレスは必須です。';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = '有効なメールアドレスを入力してください。';
    }

    // Validate phone number
    if (!empty($_POST['phone_number']) && !preg_match('/^\+?[1-9]\d{1,14}$/', $_POST['phone_number'])) {
        $errors['phone_number'] = '有効な電話番号を入力してください。';
    }

    // Validate date of birth
    if (empty($_POST['date_of_birth'])) {
        $errors['date_of_birth'] = '生年月日は必須です。';
    } elseif (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $_POST['date_of_birth'])) {
        $errors['date_of_birth'] = '有効な生年月日を入力してください。';
    }

    // Validate prefecture
    if (empty($_POST['prefecture'])) {
        $errors['prefecture'] = '都道府県は必須です。';
    }

    // Validate terms agreement
    if (empty($_POST['agree_terms'])) {
        $errors['agree_terms'] = '利用規約に同意してください。';
    }

    // Register user if no errors
    if (empty($errors)) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $date_of_birth = $_POST['date_of_birth'];
        $prefecture = $_POST['prefecture'];

        $query = "INSERT INTO users (username, password_hash, email, phone_number, date_of_birth, prefecture) VALUES (:username, :password, :email, :phone_number, :date_of_birth, :prefecture)";
        $stmt = $DB->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':date_of_birth', $date_of_birth);
        $stmt->bindParam(':prefecture', $prefecture);

        if ($stmt->execute()) {
            $_SESSION['user_id'] = $DB->lastInsertId();
            header('Location: index.php');
            exit;
        } else {
            $errors['register'] = '登録に失敗しました。もう一度お試しください。';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録 | Enabler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <style>
        body {
            background-color: #ffffff;
            color: #6d6d6d;
            font-family: 'Source Han Sans', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">会員登録</h1>
        <?php if (!empty($errors['register'])): ?>
            <div class="bg-red-500 text-white px-4 py-2 mb-4">
                <?php echo $errors['register']; ?>
            </div>
        <?php endif; ?>
        <form action="register.php" method="post">
            <div class="mb-4">
                <label for="username" class="block mb-2">ユーザー名</label>
                <input type="text" name="username" id="username" class="border border-gray-300 w-full p-2" value="<?php echo $_POST['username'] ?? ''; ?>">
                <?php if (!empty($errors['username'])): ?>
                    <div class="text-red-500 mt-1">
                        <?php echo $errors['username']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2">パスワード</label>
                <input type="password" name="password" id="password" class="border border-gray-300 w-full p-2">
                <?php if (!empty($errors['password'])): ?>
                    <div class="text-red-500 mt-1">
                        <?php echo $errors['password']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2">パスワードの確認</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-300 w-full p-2">
                <?php if (!empty($errors['password_confirmation'])): ?>
                    <div