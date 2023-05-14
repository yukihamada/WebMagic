<?php
include("ai/init.php");

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//die($path);

// if($path !== "/ai/loading.php"){
//   set_error_handler(function($errno, $errstr) {
//       $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
//       @header('Location: ' . $url . '?error=' . urlencode($errstr)."&m=e");
//       exit();
//   });
  
//   set_exception_handler(function($exception) {
//       $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
//       header('Location: ' . $url . '?error=' . urlencode($exception->getMessage())."&m=e");
//       exit();
//   });    
// }


try {
  
  // クエリ文字列を取得して、$_GETに解析させる
  $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
  if($query){
    @parse_str($query, $_GET);  
  }


  if (file_exists(__DIR__ . $path) && is_file(__DIR__ . $path)) {
      return false;
  }

  if (file_exists(__DIR__ . $path . '.php')) {
    require __DIR__ . $path . '.php';
    exit();
  }
  
  $index_file = __DIR__ . '/index.php';
  
  if (file_exists($index_file) && is_file($index_file)) {
      return false;
  }
  
  $file_404 = __DIR__ . '/404.php';
  
  // リクエストされたURLに応じて、PATH_INFO環境変数を設定
  $_SERVER['PATH_INFO'] = $path;
  
  require $file_404;
  
} catch (Exception $e) {
    // Handle exception
    // $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    // header('Location: ' . $url . '?error=' . urlencode($e->getMessage())."&m=e");
    // exit();
}


