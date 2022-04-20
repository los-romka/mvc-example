<?php

namespace App\View;

class NotFoundPage
{
    public function render(array $params = []): string
    {
        return '<div>Not found</div>';
    }
}