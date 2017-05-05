<?php
$access_token = 'SeddkGWLk9w0Bi93OVf/HzPRSq4Jt3/cRukV0JK8Z+vmT9Ja6buuLpSugRCf6DCFJXAZJJ/LOPwspe2MviJUM4oCGokz5kHyAVYmDtWPe2ielfRmpYC1nEZW0DQ9kBMaf6aYIpE8B/IOomBgqTQPTQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
