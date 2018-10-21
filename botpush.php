<?php



require "vendor/autoload.php";

$access_token = 'NDK2kE63Gu1yEeDsmhSewpAp3abN1dMfZN/k/jbaUZthaL4xqIok9I/mW82KHs5AXrGsx5lHgX9zFBLQ4yxG37xcQjg0FZH42uIMzUkjw5jZAdbgQzDL8apoXmA1q3wI1Z5JMLHQluKPcJ5iqXaOiAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '034038d8557e7ff930de8aa5820c47e9';

$pushID = 'Uc62cf7f2b50eb1a9e5a91032952d2975';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







