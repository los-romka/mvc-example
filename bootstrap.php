<?php

spl_autoload_register(function(string $className) {
    if (strpos($className, 'App\\') !== 0) {
        return;
    }

    $filePath = substr($className, 4);

    require_once __DIR__ . '/src/' . str_replace('\\', '/', $filePath) . '.php';
});
