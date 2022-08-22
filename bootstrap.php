<?php

require_once __DIR__ . '/vendor/autoload.php';

$guzzle = new \GuzzleHttp\Client();

$scanner = new \ChatScraper\Scanner\Message($guzzle);
$messages = $scanner->checkForMessages();


var_dump(array_keys($messages));