<?php

namespace ChatScraper\Entities;

readonly class MessageMetadata
{
    public function __construct(
        public int $messageId,
        public string $content,
        public ?int $amountOfEdits,
        public ?int $parentId,
        public bool $isReply,
        public bool $isStarred,
        public ?int $amountOfStars,
        public bool $isPinnedByRoomOwner,
        public ?int $amountOfStarsAndPins,
        public bool $hasBeenMoved,
    ) {
    }
}