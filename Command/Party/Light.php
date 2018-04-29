<?php

declare(strict_types=1);

namespace Code\Command\Party;

class Light
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo $this->location . ' light is On' . PHP_EOL;
    }

    public function off()
    {
        echo $this->location . ' light is Off' . PHP_EOL;
    }
}
