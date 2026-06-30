<?php
$startDate = $_GET['startDate'];
$endDate = $_GET['endDate'];

$apiKey = 'cF8u(dEq0hfbBiWcbW2eJRDgVDURHmTfeBrqD4fRC';

$url = "https://kauai.ccmc.gsfc.nasa.gov/DONKI/WS/get/IPS?startDate=$startDate&endDate=$endDate&api_key=$apiKey";

$response = file_get_contents($url);

header('Content-Type: application/json');
echo $response;
?>
