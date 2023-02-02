<?php

use ChatScraper\Retriever\Message;
use GuzzleHttp\Client;

require_once __DIR__ . '/vendor/autoload.php';

$guzzle = new Client();

$scanner = new Message($guzzle);
$messages = $scanner->checkForMessages(2);

$parser = new ChatScraper\Parser\Message($messages);

$parsedMessages = $parser->parse();

var_dump($parsedMessages);
