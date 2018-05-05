<?php

declare(strict_types=1);

namespace Code\Facade;

class DvdPlayer
{
    private $description = '';
    private $currentTrack;
    private $amplifier;
    private $movie = '';

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
        $this->movie = null;
        echo $this->description . ' eject' . PHP_EOL;
    }

    public function playMovie(string $movie): void
    {
        $this->movie        = $movie;
        $this->currentTrack = 0;
        echo sprintf('%s playing "%s"', $this->description, $movie) . PHP_EOL;
    }

    public function playTrack(int $track): void
    {
        if (null === $this->movie) {
            echo sprintf('%s can\'t play track %s , no dvd inserted',
                    $this->description, $this->currentTrack) . PHP_EOL;
        } else {
            $this->currentTrack = $track;
            echo sprintf('%s playing track %s of "%s"',
                    $this->description, $this->currentTrack, $this->movie
                ) . PHP_EOL;
        }
    }

    public function stop(): void
    {
        $this->currentTrack = 0;
        echo $this->description . ' stopped ' . $this->movie . PHP_EOL;
    }

    public function pause(): void
    {
        $this->currentTrack = 0;
        echo sprintf('%s paused "%s"', $this->description, $this->movie) . PHP_EOL;
    }

    public function setTwoChannelAudio(): void
    {
        echo $this->description . ' set two channel audio' . PHP_EOL;
    }

    public function setSurroundAudio(): void
    {
        echo $this->description . ' set surround audio' . PHP_EOL;
    }
}
