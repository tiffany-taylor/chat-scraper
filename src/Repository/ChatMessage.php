<?php

namespace ChatScraper\Repository;

readonly class ChatMessage
{
    public function __construct(
        public int $timestamp,
        public string $content,
        public int $userId,
        public string $username,
        public int $roomId,
        public int $messageId,
        public int $amountOfEdits,
        public int $parentId,
        public bool $isReply,
        public bool $isStarred,
        public int $amountOfStars,
        public bool $isPinnedByRoomOwner,
        public bool $hasBeenMoved,
    ) {
    }
}