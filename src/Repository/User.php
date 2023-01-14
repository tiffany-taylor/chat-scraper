<?php

namespace ChatScraper\Repository;

class User
{
    public function __construct(
        public int $userId,
        public string $username
    ) {
    }
}