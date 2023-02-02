<?php

namespace ChatScraper\Entities;

class User
{
    public function __construct(
        public int $userId,
        public string $username
    ) {
    }
}