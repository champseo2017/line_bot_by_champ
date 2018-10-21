<?php
$strAccessToken = "NDK2kE63Gu1yEeDsmhSewpAp3abN1dMfZN/k/jbaUZthaL4xqIok9I/mW82KHs5AXrGsx5lHgX9zFBLQ4yxG37xcQjg0FZH42uIMzUkjw5jZAdbgQzDL8apoXmA1q3wI1Z5JMLHQluKPcJ5iqXaOiAdB04t89/1O/w1cDnyilFU=";
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$strUrl = "https://api.line.me/v2/bot/message/reply";

$arrHeader = array();
$arrayHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$_msg = $arrJson['events'][0]['message']['text'];

$api_key="_3lKtZAAgeiBKfwitPECdGedVSAecR8g";
$url = 'https://api.mlab.com/api/1/databases/line_bot/collections/line_bot?apiKey='.$api_key.'';
$json = file_get_contents('https://api.mlab.com/api/1/databases/line_bot/collections/line_bot?apiKey='.$api_key.'&q={"question":"'.$_msg.'"}');
$data = json_decode($json);
$isData=sizeof($data);

//รับ id ของผู้ใช้
$id = $arrayJson['events'][0]['source']['userId'];
#ตัวอย่าง Message Type "Text + Sticker"
if($_msg == "สวัสดี"){
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
   $arrayPostData['messages'][1]['type'] = "sticker";
   $arrayPostData['messages'][1]['packageId'] = "2";
   $arrayPostData['messages'][1]['stickerId'] = "34";
   pushMsg($arrayHeader,$arrayPostData);
}
function pushMsg($arrayHeader,$arrayPostData){
   $strUrl2 = "https://api.line.me/v2/bot/message/push";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,$strUrl);
   curl_setopt($ch, CURLOPT_HEADER, false);
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   $result = curl_exec($ch);
   curl_close ($ch);
}



 
?>