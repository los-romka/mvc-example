<?php

namespace App\View;

class HomePage
{
    public function render(array $params = []): string
    {
        if ($params['username'] === null) {
            return "<div>This is just a home controller</div>";
        }

        return "<div>This is home controller, {$params['username']}!</div>";
    }
}
