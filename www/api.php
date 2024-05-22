<?php
// api.php (Backend)
$url = "https://sky.shiiyu.moe/api/v2/profile/100Create/";
$response = file_get_contents($url);
$data = json_decode($response, true);
echo json_encode(['data' => $data]);
?>