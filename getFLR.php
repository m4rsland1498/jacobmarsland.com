<?php
// Allow access from any origin
header("Access-Control-Allow-Origin: *");

// Validate parameters
if (!isset($_GET['startDate']) || !isset($_GET['endDate'])) {
    echo json_encode(["error" => "Missing parameters"]);
    exit;
}

// Get the parameters
$startDate = $_GET['startDate'];
$endDate = $_GET['endDate'];

// Your NASA API Key — keep this secret!
$apiKey = 'ddt080xahigzGPLwxXh4mbN7PMlnGSusdxR6OcvB';

// The URL to fetch data from NASA's API
$url = "https://api.nasa.gov/DONKI/FLR?startDate=$startDate&endDate=$endDate&api_key=$apiKey";

// Initialize cURL to fetch data
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

// Check for errors with cURL
if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
    echo json_encode(["error" => $error_msg]);
    curl_close($ch);
    exit;
}

curl_close($ch);

// Send the JSON response back to the browser
header('Content-Type: application/json');
echo $response;
?>
