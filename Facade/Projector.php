<?php

declare(strict_types=1);

namespace Code\Facade;

class Projector
{
    private $description;
    private $dvdPlayer;

    public function __construct(string $description, DvdPlayer $dvdPlayer)
    {
        $this->description = $description;
        $this->dvdPlayer   = $dvdPlayer;
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

    public function wideScreenMode(): void
    {
        echo $this->description . ' in widescreen mode (16x9 aspect ratio)' . PHP_EOL;
    }

    public function tvMode(): void
    {
        echo $this->description . ' in tv mode (4x3 aspect ratio)' . PHP_EOL;
    }
}
