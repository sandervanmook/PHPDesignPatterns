<?php

declare(strict_types=1);

namespace Code\Command\Party;

class TV
{
    private $location;
    private $channel;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo $this->location . ' TV is On' . PHP_EOL;
    }

    public function off()
    {
        echo $this->location . ' TV is Off' . PHP_EOL;
    }

    public function setInputChannel()
    {
        $this->channel = 3;
        echo $this->location . ' TV channel is set for DVD' . PHP_EOL;
    }
}
