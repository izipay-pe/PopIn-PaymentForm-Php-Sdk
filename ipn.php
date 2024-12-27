<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/keys.php';

if (empty($_POST)) {
    throw new Exception("No post data received!");
}

$client = new Lyra\Client();  

if (!$client->checkHash()) {
    throw new Exception('invalid signature');
}

$rawAnswer = $client->getParsedFormAnswer();

$answer = $rawAnswer['kr-answer'];

$transaction = $answer['transactions'][0];
$orderStatus = $answer['orderStatus'];
$orderId = $answer['orderDetails']['orderId'];
$transactionUuid = $transaction['uuid'];

print 'OK! OrderStatus is ' . $orderStatus;