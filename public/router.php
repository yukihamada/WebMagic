<?php
include("ai/init.php");

// 取得したいリソースのパス
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// クエリ文字列を取得して、$_GETに解析させる
$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
@parse_str($query, $_GET);

// ファイルまたはディレクトリが存在する場合、通常のリクエスト処理を実行
if (file_exists(__DIR__ . $path) && is_file(__DIR__ . $path)) {
    return false;
}

// CodeIgniterのインデックスファイルへのパス
$index_file = __DIR__ . '/index.php';

// リクエストされたURLに応じて、PATH_INFO環境変数を設定
$_SERVER['PATH_INFO'] = $path;

// CodeIgniterのインデックスファイルを読み込み、アプリケーションを実行
require $index_file;
