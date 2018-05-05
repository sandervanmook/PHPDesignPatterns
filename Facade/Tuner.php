<?php

declare(strict_types=1);


namespace Code\Facade;


class Tuner
{
    private $description;
    private $amplifier;
    private $frequency;

    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
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

    public function setFrequency(float $frequency): void
    {
        echo $this->description . ' setting frequency to ' . $frequency . PHP_EOL;
        $this->frequency = $frequency;
    }

    public function setAm(): void
    {
        echo $this->description . ' setting AM mode' . PHP_EOL;
    }

    public function setFm(): void
    {
        echo $this->description . ' setting FM mode' . PHP_EOL;
    }

}