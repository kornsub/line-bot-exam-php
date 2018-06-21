<?php

require "vendor/autoload.php";

//$access_token = 'ip/pRN4xHdsvZP7E+9BFQNrgNz1cBbwU+92eHsKjWKauP14oprQF9K57kxbaMTxLVTvJtAWrYZNVLe1V1ikZ+9NRWXc9u6HBgf/RBrmmXkq3cNbOrtRILf9ogEUQ2yzjDyoFJTORu5g4O0g15jP6rAdB04t89/1O/w1cDnyilFU=';
//$channelSecret = 'd092e4a4d7760d4c5f62b396f7b8e5dd';
$access_token = 'Q5JtYUSsKcDOw2qt1WBLFe7pAv+lq1HH1TpkokYfhc5SSk9fUOJxh1ijHkNDq5SKiPjQRsbtrujAG4YyCZK4zecc1a8cfUvJ2bHnDrZ0GBN25DRFJFd7SPJ94CpK7lquMxeGhLAL79jfEpWYh+gPMAdB04t89/1O/w1cDnyilFU=';
$channelSecret = '3b552385f6e618c7c4a74a0595920704';

$pushID = $_GET['id'];
$textmsg = $_GET['text'];

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder( $textmsg );
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







