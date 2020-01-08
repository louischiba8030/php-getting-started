<?php
 
// Webhook URL
$url = "https://hooks.slack.com/services/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";
 
// メッセージ
$message = array(
    "username"   => "Ryo",
    "icon_emoji" => ":slack:",
    "text"       => "Post message from PHP to Slack"
);
 
// メッセージをjson化
$message_json = json_encode($message);
 
// payloadの値としてURLエンコード
$message_post = "payload=".urlencode($message_json);
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $message_post);
curl_exec($ch);
curl_close($ch);
