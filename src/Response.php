<?php

namespace App;

class Response
{
    private string $content;
    private int $statusCode;

    public function __construct(string $content, int $statusCode)
    {
        $this->content = $content;
        $this->statusCode = $statusCode;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
