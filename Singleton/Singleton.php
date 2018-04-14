<?php

declare(strict_types=1);

namespace Code\Singleton;

class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Singleton
    {
        if (! self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getDescription(): string
    {
        return "I'm a classic Singleton!" . PHP_EOL;
    }

    // More usefull methods here...
}
