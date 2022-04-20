<?php

namespace App\View;

use App\Model\User;

class ProfilePage
{
    public function render(array $params = []): string
    {
        if (!isset($params['user'])) {
            throw new \RuntimeException('invalid arguments!');
        }

        /**
         * @var User $user
         */
        $user = $params['user'];

        return "<div>Name: {$user->getName()}</div>"
            . "<div>Age: {$user->getAge()}</div>";
    }
}
