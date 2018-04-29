<?php

declare(strict_types=1);

namespace Code\Command\Party;

class CeilingFan
{
    const HIGH   = 3;
    const MEDIUM = 2;
    const LOW    = 1;
    const OFF    = 0;

    private $location = '';
    private $speed    = self::OFF;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function high(): void
    {
        $this->speed = self::HIGH;
        echo $this->location . ' ceiling fan is on high' . PHP_EOL;
    }

    public function medium(): void
    {
        $this->speed = self::MEDIUM;
        echo $this->location . ' ceiling fan is on medium' . PHP_EOL;
    }

    public function low(): void
    {
        $this->speed = self::LOW;
        echo $this->location . ' ceiling fan is on low' . PHP_EOL;
    }

    public function off(): void
    {
        $this->speed = self::OFF;
        echo $this->location . ' ceiling fan is off' . PHP_EOL;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}
