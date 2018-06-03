<?php

declare(strict_types=1);

namespace Code\Proxy\GumballMonitor;

class GumballMonitor
{
    private $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function report(): void
    {
        echo 'Gumball Machine: ' . $this->machine->getLocation() . PHP_EOL;
        echo 'Current inventory: ' . $this->machine->getCount() . ' gumballs' . PHP_EOL;
        echo 'Current state: ' . $this->machine->getState() . PHP_EOL;
    }
}
