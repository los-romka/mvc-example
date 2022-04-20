<?php

namespace App\Controller;

use App\Model\Users;
use App\Model\UsersInterface;
use App\Request;
use App\Response;
use App\View\NotFoundPage;
use App\View\ProfilePage;

class ProfilePageController implements PageControllerInterface
{
    private UsersInterface $users;

    public function __construct(UsersInterface $users)
    {
        $this->users = $users;
    }

    public function handle(Request $request): Response
    {
        $page = new ProfilePage();

        if (!isset($request->get['username'])) {
            return new Response((new NotFoundPage())->render(), 404);
        }

        $user = $this->users->findByName($request->get['username']);

        if ($user === null) {
            return new Response((new NotFoundPage())->render(), 404);
        }

        $content = $page->render(['user' => $user]);

        return new Response($content, 200);
    }
}
