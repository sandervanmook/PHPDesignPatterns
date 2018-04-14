<?php

declare(strict_types=1);

namespace Code\Singleton;

class ChocolateBoiler
{
    private $empty;
    private $boiled;
    private static $uniqueInstance;

    private function __construct()
    {
        $this->empty  = true;
        $this->boiled = false;
    }

    public static function getInstance()
    {
        if (! self::$uniqueInstance) {
            echo 'Creating unique instance of Chocolate Boiler' . PHP_EOL;
            self::$uniqueInstance = new self();
        }
        echo 'Returning instance of Chocolate Boiler' . PHP_EOL;

        return self::$uniqueInstance;
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }

    public function isBoiled(): bool
    {
        return $this->boiled;
    }

    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty  = false;
            $this->boiled = false;
            // fill the boiler with a milk/chocolate mixture
        }
    }

    public function drain(): void
    {
        if (! $this->isEmpty() && $this->isBoiled()) {
            // drain the boiled milk and chocolate
            $this->empty = true;
        }
    }

    public function boil(): void
    {
        if (! $this->isEmpty() && ! $this->isBoiled()) {
            // bring the contents to a boil
            $this->boiled = true;
        }
    }
}
