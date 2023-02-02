<?php

namespace ChatScraper\Parser;

use ChatScraper\Entities\ChatMessageResponse;
use ChatScraper\Entities\MessageMetadata;
use ChatScraper\Entities\User;
use DateTimeImmutable;

/**
 * copies text of a message into storage medium
 */

class Message
{
    public function __construct(protected array $messages)
    {
    }

    public function parse()
    {
        $messagesInMemory = [];
        foreach ($this->messages['events'] as $message) {
            $messagesInMemory[] = new ChatMessageResponse(
                DateTimeImmutable::createFromFormat('U', $message['time_stamp']),
                new User(
                    $message['user_id'],
                    $message['user_name'],
                ),
                $message['room_id'],
                new MessageMetadata(
                    $message['message_id'],
                    $message['content'],
                    $message['message_edits'] ?? null,
                    $message['parent_id'] ?? null,
                    $message['show_parent'] ?? false,
                    $message['message_starred'] ?? false,
                    $message['message_stars'] ?? null,
                    $message['message_owner_starred'] ?? false,
                    $message['message_owner_stars'] ?? null,
                    $message['moved'] ?? false,
                )

            );
        }
        return $messagesInMemory;
    }
}