<?php

namespace App\Model;

interface UsersInterface
{
    public function all(): array;

    public function findByName(string $name): ?User;
}
