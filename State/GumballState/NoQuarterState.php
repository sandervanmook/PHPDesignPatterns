<?php

declare(strict_types=1);

namespace Code\State\GumballState;

class NoQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function __toString(): string
    {
        return 'waiting for quarter' . PHP_EOL;
    }

    public function insertQuarter(): void
    {
        echo 'You inserted a quarter' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter(): void
    {
        echo 'You haven\'t inserted a quarter' . PHP_EOL;
    }

    public function turnCrank(): void
    {
        echo 'You turned, but there\'s no quarter' . PHP_EOL;
    }

    public function dispense(): void
    {
        echo 'You need to pay first' . PHP_EOL;
    }

    public function refill(): void
    {
    }
}
