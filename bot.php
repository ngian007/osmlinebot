<?php

$messageFormat = ["contentType" => 1,"toType" => 1,"text" => "hello!!XXX"];
//POST
$postData = [
    "to" => [$targetMID],
    "toChannel" => "1383378250",
    "eventType" => "138311608800106203",
    "content" => $messageFormat
];
$channelID      = "channelID";
$channelSecret  = "channel Secret";
$channelMID     = "MID";
//API URL
$url = "https://trialbot-api.line.me/v1/events";

$headers = array(
    "Content-Type: application/json; charser=UTF-8",
    "X-Line-ChannelID: " . $channelID,
    "X-Line-ChannelSecret: " . $channelSecret,
    "X-Line-Trusted-User-With-ACL: " . $channelMID
);
     
//curl
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);