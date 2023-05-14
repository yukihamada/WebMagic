<?php
require 'vendor/autoload.php';

$openai_apikey = getenv('OpenAI_APIKEY');

if (!$openai_apikey) {
    $dotenvFilePath = __DIR__ . '/.env';
    
    if (!file_exists($dotenvFilePath)) {
        die('The .env file does not exist. Please create it with necessary variables. Refer to .env.template for guidance.');
    }
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $openai_apikey = getenv('OpenAI_APIKEY');
    
    if (!$openai_apikey) {
        die('OpenAI_APIKEY is not set. Please set it in .env file or in system environment variables.');
    }
}


session_start();

$projectRootPath = dirname(__FILE__)."/../../";
ini_set('include_path', $projectRootPath . PATH_SEPARATOR . get_include_path());


spl_autoload_register(function ($class) {

  // クラスファイルを探すディレクトリ
    $directories = [
        dirname(__FILE__).'/../../',
        dirname(__FILE__).'/../../class/',
    ];

    $class = str_replace('\\', '/', $class);

    foreach ($directories as $directory) {
        $file_path = $directory . $class . '.php';

        if (file_exists($file_path)) {
            require_once $file_path;
            break;
        }
    }
});

function LIVE($prompt, $output){

  $file = dirname(__FILE__)."/../../cache/AI_".md5($prompt).".cache";
    if(file_exists($file)){
     $buf = file_get_contents($file,$prompt);
    if($buf) return $buf;
   }
    @ini_set('zlib.output_compression', 0);
    @ini_set('output_buffering', 'off');
    @ini_set('output_handler', '');
    
    ob_implicit_flush(true);
    @ob_end_flush();
    header("Content-Type: text/event-stream");
    header("Cache-Control: no-cache");

  $dir = dirname(__FILE__)."/prompt/";
  $index = file_get_contents("{$dir}index.txt");

  $txts = AI("User Request
{$prompt}

Please select the required documents to answer from the list below.

".shell_exec("ls {$dir}")."

Txt(Comma sepalated)=");


  if($txts){
    $array = explode(',', $txts);
  
    $database = "";
    $extra = "";
    if(count($array) > 0){
      foreach ($array as $filename) {
        $filename = trim($filename);
        if(file_exists($dir.$filename) && $filename != "index.txt"){
          if(preg_match("/database/",$filename)){
            $data = file_get_contents($dir.$filename);
            $database .= $data."\n";            
          }else{
            $data = file_get_contents($dir.$filename);
            $extra .= $data."\n";            
          }
        }
      }
    }      
  }

  $index = @str_replace('{database}', $database, $index);
  $index = @str_replace('{extra}', $extra, $index);
  $index = @str_replace('{instruction}', $prompt, $index);
  $index = @str_replace('{output}', $output, $index);

  $openAI = new OpenAIAPI(getenv('OpenAI_APIKEY'));
  $text = @$openAI->getPromptResponse($index, 4000,0,true);

  file_put_contents($file,$text);
  return $text;
}

function AI($prompt,$cache = true,$model = "gpt-4"){//gpt-3.5-turbo
  $file = dirname(__FILE__)."/../../cache/AI_".md5($prompt).".cache";

  if($cache && file_exists($file)){
    return file_get_contents($file);
  }

  $openAI = new OpenAIAPI(getenv('OpenAI_APIKEY'),$model);
  $text = $openAI->getPromptResponse($prompt, 5000);

  if($cache){
    file_put_contents($file,$text);
  }
  return $text;
}

function prompt($prompt){

  $edit = false;
  if(isset($_GET["m"])){
    if($_GET["m"] === 'e'){
      $edit = true;
    }    
  }

  $code = '';
  $file = dirname(__FILE__)."/../../cache/AI_".md5($prompt).".cache";

  if(file_exists($file) && !$edit){
    include($file);
    exit();
  }

  if(file_exists($file)){
    $code = file_get_contents($file);
  }

  if(!$prompt){
    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    if (substr($url, -1) == "/") $url .= "index.php";
    $prompt = "Create {$url}";
  }

  if(isset($_GET["error"])){
    $error = $_GET["error"];
    $prompt = $code ."\n\nFix the error in the code abobe.\n\n{$error}";
  }
  
  $dir = dirname(__FILE__)."/prompt/";
  
  include(dirname(__FILE__)."/loading.php");

}


function d($d){
  echo"<pre>";
  print_r($d);
}

function dd($d){
  file_put_contents('debug.txt', print_r($d,true),FILE_APPEND);
}

function e($str) {
  // 余計なスペースを削除する
  $str = trim($str);
  // HTMLタグをエスケープする
  $str = htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  // サニタイズされた文字列を返す
  return $str;
}

function Translate($text) {
  $output_lang = $_GET['output'] ?? $_SERVER['HTTP_ACCEPT_LANGUAGE'];
  $output_lang = substr($output_lang, 0, 2);
  if(!$output_lang) $output_lang = 'ja';
  
    $trunslate_prompt = "
Translate 'おかえりなさい。また会えてうれしいです。何かお困りのことはありますか？' to 'en'.:Welcome back. Good to see you again. Is there Translate '今日の天気は？,ニュースを教えてください,パンダの絵を描いて' to 'en'.:What's the weather today?,Tell us the news, Draw a picture of a panda.
Translate 'Welcome back. Good to see you again. Is there anything we can help you with?' to 'jp'.:いらっしゃいませ、こんにちは。何をお探しですか？
Translate 'いらっしゃいませ、こんにちは。何をお探しですか？' to 'jp'.:いらっしゃいませ、こんにちは。何をお探しですか？
Translate '{$text}' to language of '{$output_lang}'.:
    ";
  return preg_replace("/\"/","",AI($trunslate_prompt,true));
}

function DB(){
  // CockroachDBの設定を読み込む
  $tempCertFile = tmpfile();
  fwrite($tempCertFile, getenv('COCKROACH_DB_CRT'));

  $dsn = sprintf(
  "pgsql:host=%s;port=26257;dbname=%s;sslmode=require;sslrootcert=%s",
      getenv('COCKROACH_DB_HOST'),
      getenv('COCKROACH_DB_DB'),
      stream_get_meta_data(tmpfile())['uri']
  );
  
  $conn = new PDO(
      $dsn,
      getenv('COCKROACH_DB_USER'),
      getenv('COCKROACH_DB_PASS'),
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
  return $conn;
}


