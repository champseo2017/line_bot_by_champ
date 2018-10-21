<?php
$api_key="_3lKtZAAgeiBKfwitPECdGedVSAecR8g";
$url = 'https://api.mlab.com/api/1/databases/line_bot/collections/line_bot?apiKey='.$api_key.'';
$json = file_get_contents('https://api.mlab.com/api/1/databases/line_bot/collections/line_bot?apiKey='.$api_key);
$data = json_decode($json,true);
echo "<pre>";
print_r($data);
echo "</pre>";
