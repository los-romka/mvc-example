<?php

namespace App;

use App\Controller\HomePageController;
use App\Controller\NotFoundPageController;
use App\Controller\ProfilePageController;
use App\Model\Users;

class Application
{
    public function run(Request $request): Response
    {
        $controller = new NotFoundPageController();

        if (isset($request->get['action'])) {
            if ($request->get['action'] === 'home') {
                $controller = new HomePageController();
            } else if ($request->get['action'] === 'profile') {
                $controller = new ProfilePageController(new Users());
            }
        }

        return $controller->handle($request);
    }
}