<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$requestUrl = getenv('LAMETRIC_BROADCAST_URL');
if (empty($requestUrl)) {
    die('Missing parameters');
}

$requestBody = [
    'message' => 'Daily',
    'icon' => '30195'
];

$response = $client->request(
    'POST',
    $requestUrl,
    [
        'json' => $requestBody
    ]
);
