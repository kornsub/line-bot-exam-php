<?php

require "vendor/autoload.php";
print_r($_POST[0]);
$data = json_decode($_POST);
echo "<br>";
echo $_POST[0]['to'];

print_r($data[0]);

$access_token = 'ip/pRN4xHdsvZP7E+9BFQNrgNz1cBbwU+92eHsKjWKauP14oprQF9K57kxbaMTxLVTvJtAWrYZNVLe1V1ikZ+9NRWXc9u6HBgf/RBrmmXkq3cNbOrtRILf9ogEUQ2yzjDyoFJTORu5g4O0g15jP6rAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd092e4a4d7760d4c5f62b396f7b8e5dd';

$pushID = $data['id'];
$textmsg = $data['text'];

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder( $textmsg );
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







