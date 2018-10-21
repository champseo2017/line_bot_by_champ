<?php


$access_token = 'NDK2kE63Gu1yEeDsmhSewpAp3abN1dMfZN/k/jbaUZthaL4xqIok9I/mW82KHs5AXrGsx5lHgX9zFBLQ4yxG37xcQjg0FZH42uIMzUkjw5jZAdbgQzDL8apoXmA1q3wI1Z5JMLHQluKPcJ5iqXaOiAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

