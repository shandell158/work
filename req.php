<?php
$url = 'https://www.api.ringo.ng/api/agent/p2';

$headers = array(
    'Content-Type: application/json',
    'email: otpforall7@gmail.com',
    'password: book12345'
);

$data = array(
    'serviceCode' => 'BDP',
    'type' => 'BET',
    'biller' => 'BangBet',
    'customerId' => '08136323311',
    'request_id' => '66yhh98nn8udu87888669866',
    'amount' => 1000
);

$data_string = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($response === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo 'Response HTTP Code: ' . $httpCode . "\n";
    echo 'Response: ' . $response;
}

curl_close($ch);
?>
