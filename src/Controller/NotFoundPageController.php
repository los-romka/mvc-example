<?php

namespace App\Controller;

use App\Request;
use App\Response;

class NotFoundPageController implements PageControllerInterface
{
    public function handle(Request $request): Response
    {
        return new Response('<div>Not found</div>', 404);
    }
}
