<?php

declare(strict_types=1);

namespace Code\Facade;

class TheaterLights
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

    public function on(): void
    {
        echo $this->description . ' on' . PHP_EOL;
    }

    public function off(): void
    {
        echo $this->description . ' off' . PHP_EOL;
    }

    public function dim(int $level): void
    {
        echo sprintf('%s dimming to %s procent', $this->description, $level) . PHP_EOL;
    }
}
