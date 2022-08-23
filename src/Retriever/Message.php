<?php

/**
 * overview: scans through pages, finding messages to scrape
 *   will determine if a node is a chat message
 *
 *
 * will send request to capture json payload
 */

namespace ChatScraper\Retriever;

use GuzzleHttp\Client;

include(__DIR__ . '/../../config.php');

class Message
{
    private const CHAT_URL = 'https://chat.stackoverflow.com/rooms/11/php';
    private const MESSAGES_URL = 'https://chat.stackoverflow.com/chats/11/events';

    public function __construct(protected Client $httpClient)
    {
        $this->httpClient = new Client();
    }

    public function checkForMessages(): array
    {
        $response = $this->httpClient->request(
            'POST',
            self::MESSAGES_URL,
            [
                'query' => [
                    'since' => Config::SINCE,
                    //'before' => '55110732',
                    'mode' => Config::MODE,
                    'msgCount' => Config::MESSAGE_COUNT,
                    'fkey' => USER_FKEY,
                ]
            ],
        );

         return json_decode($response->getBody()->getContents(), true);
    }
}