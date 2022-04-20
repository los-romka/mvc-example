<?php

namespace App\Controller;

use App\Request;
use App\Response;

interface PageControllerInterface
{
    public function handle(Request $request): Response;
}
