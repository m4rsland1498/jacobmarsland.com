<?php
$startDate = $_GET['start_date'];
$endDate = $_GET['end_date'];

$apiKey = 'KPgeN8pwHVzaSTiBc0vnwa0Tv0Gpw6Gd0UU1tP53';

$url = "https://api.nasa.gov/planetary/apod?start_date=$startDate&end_date=$endDate&api_key=$apiKey";

$response = file_get_contents($url);

header('Content-Type: application/json');
echo $response;
?>
