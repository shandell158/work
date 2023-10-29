<?php

// Define the API endpoint URL
$url = "https://www.api.ringo.ng/api/agent/p2";

// Define the request data
$data = array(
    "serviceCode" => "BDP",
    "type" => "BET",
    "biller" => "BangBet",
    "customerId" => "08136323311",
    "request_id" => "66yhh69866",
    "amount" => 1000
);

// Create an associative array of HTTP headers
$headers = array(
    "Content-Type: application/json",
    "email: otpforall7@gmail.com",
    "password: ROMANCATHOLIC+"
);

// Create a stream context with the HTTP method and headers
$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => implode("\r\n", $headers),
        'content' => json_encode($data)
    )
));

// Send the POST request
$response = file_get_contents($url, false, $context);

// Check for errors and handle the response
if ($response === false) {
    // Error handling
    echo "Failed to make the API request.";
} else {
    // Handle the API response
    echo $response;
}
