<?php

declare(strict_types=1);

namespace Code\Command\Party;

class Stereo
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo $this->location . ' stereo is on' . PHP_EOL;
    }

    public function off(): void
    {
        echo $this->location . ' stereo is off' . PHP_EOL;
    }

    public function setCD(): void
    {
        echo $this->location . ' stereo is set for CD input' . PHP_EOL;
    }

    public function setDVD(): void
    {
        echo $this->location . ' stereo is set for DVD input' . PHP_EOL;
    }

    public function setRadio(): void
    {
        echo $this->location . ' stereo is set for Radio' . PHP_EOL;
    }

    public function setVolume(int $volume)
    {
        // code to set the volume
        // valid range: 1-11 (after all 11 is better than 10, right?)
        echo sprintf('%s Stereo volume set to %d', $this->location, $volume) . PHP_EOL;
    }
}
