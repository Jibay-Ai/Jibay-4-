<?php

// Created By Jibay
// Model is Jibay-4

$key = 'YOUR_API_KEY';
$text = 'Hi Jibay , How are you?';

$url = 'https://piki-h.ir/Jibay/j-4.php';

$postData = [
    'key' => $key,
    'text' => $text,
    'think' => 'N',
    'monday' => 'N',
    'learn' => 'N',
    'name' => 'Unknown',
    'all' => 'Empty',
    'ab' => 'No about you or user',
    'search' => 'N',
    'file' => 'TextFile'
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'curl error: ' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
