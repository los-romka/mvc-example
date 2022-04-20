<?php

require_once dirname(__DIR__) . '/bootstrap.php';

$application = new \App\Application();

$response = $application->run(new \App\Request($_GET, $_POST));

http_response_code($response->getStatusCode());

echo $response->getContent();
