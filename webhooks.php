<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'NDK2kE63Gu1yEeDsmhSewpAp3abN1dMfZN/k/jbaUZthaL4xqIok9I/mW82KHs5AXrGsx5lHgX9zFBLQ4yxG37xcQjg0FZH42uIMzUkjw5jZAdbgQzDL8apoXmA1q3wI1Z5JMLHQluKPcJ5iqXaOiAdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

		
		}
	}
}
echo "OK";
