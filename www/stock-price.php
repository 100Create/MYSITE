<?php
// stock-price.php (Backend)
$apiKey = '3Z4O11Y4GOL6MMZE';
$symbol = 'NVDA'; // Example stock symbol
$url = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol={$symbol}&apikey={$apiKey}";
$response = file_get_contents($url);
$data = json_decode($response, true);
$price = $data['Global Quote']['05. price'];
echo json_encode(['price' => $price]);
?>