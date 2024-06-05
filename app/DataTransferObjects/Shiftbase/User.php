<?php

namespace App\DataTransferObjects\Shiftbase;

readonly class User
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $avatarUrl,
        public string $email,
        public ?string $phoneNumber
    )
    {}

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}