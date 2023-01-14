<?php

namespace ChatScraper\Repository;

readonly class ChatMessageResponse
{
    public function __construct(
        public \DateTimeInterface $timestamp,
        public User $user,
        public int $roomId,
        public MessageMetadata $message,
    ) {
    }
}