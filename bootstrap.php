<?php

use ChatScraper\Retriever\Message;
use GuzzleHttp\Client;

require_once __DIR__ . '/vendor/autoload.php';

$guzzle = new Client();

$scanner = new Message($guzzle);
$messages = $scanner->checkForMessages();


var_dump($messages);