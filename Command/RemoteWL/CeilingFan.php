<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

class CeilingFan
{
    const HIGH   = 3;
    const MEDIUM = 2;
    const LOW    = 1;

    private $location = '';
    private $level;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function high(): void
    {
        $this->level = self::HIGH;
        echo $this->location . ' ceiling fan is on high' . PHP_EOL;
    }

    public function medium(): void
    {
        $this->level = self::MEDIUM;
        echo $this->location . ' ceiling fan is on medium' . PHP_EOL;
    }

    public function low(): void
    {
        $this->level = self::LOW;
        echo $this->location . ' ceiling fan is on low' . PHP_EOL;
    }

    public function off(): void
    {
        $this->level = 0;
        echo $this->location . ' ceiling fan is off' . PHP_EOL;
    }

    public function getSpeed(): int
    {
        return $this->level;
    }
}
