<?php

declare(strict_types=1);

namespace Code\Command\Party;

class GarageDoor
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function up(): void
    {
        echo $this->location . ' garage Door is Open' . PHP_EOL;
    }

    public function down(): void
    {
        echo $this->location . ' garage Door is Closed' . PHP_EOL;
    }

    public function stop(): void
    {
        echo $this->location . ' garage Door is Stopped' . PHP_EOL;
    }

    public function lightOn(): void
    {
        echo $this->location . ' garage light is on' . PHP_EOL;
    }

    public function lightOff(): void
    {
        echo $this->location . ' garage light is off' . PHP_EOL;
    }
}
