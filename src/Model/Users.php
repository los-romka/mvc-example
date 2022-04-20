<?php

namespace App\Model;

class Users implements UsersInterface
{
    public function all(): array
    {
        return [
            new User('Vasya', 23),
            new User('Katya', 24),
            new User('Igor', 21),
        ];
    }

    public function findByName(string $name): ?User
    {
        $users = $this->all();

        foreach ($users as $user) {
            if ($user->getName() === $name) {
                return $user;
            }
        }

        return null;
    }
}
