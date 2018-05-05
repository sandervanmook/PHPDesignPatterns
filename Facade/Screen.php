<?php

declare(strict_types=1);

namespace Code\Facade;

class Screen
{
    private $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function __toString(): string
    {
        return $this->description;
    }

    public function up(): void
    {
        echo $this->description . ' going up' . PHP_EOL;
    }

    public function down(): void
    {
        echo $this->description . ' going down' . PHP_EOL;
    }
}
