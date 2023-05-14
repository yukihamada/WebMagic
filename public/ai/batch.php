<?php
include("init.php");

// インスタンス化
$openAIApi = new OpenAIAPI(getenv('OpenAI_APIKEY'));

// 質問のリスト
$questions = [
    "What is the capital of France?",
    "What is the capital of Italy?",
    "What is the capital of Japan?",
];

// メッセージリストの配列を作成
$allMessagesList = array_map(function ($question) {
    return [
        ["role" => "user", "content" => $question],
    ];
}, $questions);

// getMultiResponsesメソッドを使用して、複数のリクエストを並列に送信
$responses = $openAIApi->getMultiResponses($allMessagesList);

// 各リクエストの結果を表示
foreach ($responses as $index => $response) {
    echo "Response " . ($index + 1) . ": " . $response . "\n";
}
