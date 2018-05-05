<?php

declare(strict_types=1);

namespace Code\Facade;

class CdPlayer
{
    private $description = '';
    private $currentTrack;
    private $amplifier;
    private $title = '';

    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier   = $amplifier;
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

    public function eject(): void
    {
        $this->title = null;
        echo $this->description . ' eject' . PHP_EOL;
    }

    public function playTitle(string $title): void
    {
        $this->title        = $title;
        $this->currentTrack = 0;
        echo sprintf('%s playing "%s"', $this->description, $title) . PHP_EOL;
    }

    public function playTrack(int $track): void
    {
        if (null === $this->title) {
            echo sprintf('%s can\'t play track %s , no cd inserted',
                    $this->description, $this->currentTrack) . PHP_EOL;
        } else {
            $this->currentTrack = $track;
            echo sprintf('%s playing track %s', $this->description,
                    $this->currentTrack) . PHP_EOL;
        }
    }

    public function stop(): void
    {
        $this->currentTrack = 0;
        echo $this->description . ' stopped' . PHP_EOL;
    }

    public function pause(): void
    {
        $this->currentTrack = 0;
        echo sprintf('%s paused "%s"', $this->description, $this->title) . PHP_EOL;
    }
}
