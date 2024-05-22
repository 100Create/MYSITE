<?php
// networth.php (Backend)
$apiKey = 'f2d65722-ea9c-4ea6-bd14-3e825c287beb';
$player1 = '100create'; // Player 1 username
$player2 = 'shiny_andreos'; // Player 2 username
$url = "https://api.hypixel.net/skyblock/profiles?key={$apiKey}&name={$player1},{$player2}";
$response = file_get_contents($url);
$data = json_decode($response, true);
$player1Networth = $data['profiles'][0]['members'][$player1]['coin_purse'];
$player2Networth = $data['profiles'][0]['members'][$player2]['coin_purse'];
echo json_encode(['player1_networth' => $player1Networth, 'player2_networth' => $player2Networth]);
?>