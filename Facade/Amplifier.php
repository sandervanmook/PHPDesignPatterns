<?php

declare(strict_types=1);

namespace Code\Facade;

class Amplifier
{
    private $description ='';
    private $tuner;
    private $dvd;
    private $cd;

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

    public function setStereoSound(): void
    {
        echo $this->description . ' stereo mode on' . PHP_EOL;
    }

    public function setSurroundSound(): void
    {
        echo $this->description . ' surround sound on (5 speakers, 1 subwoofer)' . PHP_EOL;
    }

    public function setVolume(int $level): void
    {
        echo $this->description . ' setting volume to ' . $level . PHP_EOL;
    }

    public function setTuner(Tuner $tuner): void
    {
        echo $this->description . ' setting tuner to ' . $this->dvd . PHP_EOL;
        $this->tuner = $tuner;
    }

    public function setDvd(DvdPlayer $dvdPlayer): void
    {
        echo $this->description . ' setting DVD player to ' . $this->dvd . PHP_EOL;
        $this->dvd = $dvdPlayer;
    }

    public function setCd(CdPlayer $cdPlayer): void
    {
        echo $this->description . ' setting CD player to ' . $this->cd . PHP_EOL;
        $this->cd = $cdPlayer;
    }
}
