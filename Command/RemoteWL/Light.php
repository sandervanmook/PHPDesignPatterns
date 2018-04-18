<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

class Light
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo 'The light is On' . PHP_EOL;
    }

    public function off()
    {
        echo 'The light is Off' . PHP_EOL;
    }
}
