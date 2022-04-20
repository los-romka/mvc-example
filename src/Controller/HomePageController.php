<?php

namespace App\Controller;

use App\Request;
use App\Response;
use App\View\HomePage;

class HomePageController implements PageControllerInterface
{
    public function handle(Request $request): Response
    {
        $page = new HomePage();

        $content = $page->render(['username' => $request->get['username'] ?? null]);

        return new Response($content, 200);
    }
}
