<?php

declare(strict_types=1);

namespace Akoutroulis\PhpTestCi;

final class Application
{
    private string $test;
    public function __construct()
    {
        $this->test = 'This is a test';
    }

    public function getTest(): string
    {
        return $this->test;
    }
}
