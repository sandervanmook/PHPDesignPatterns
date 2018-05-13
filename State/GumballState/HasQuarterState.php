<?php

declare(strict_types=1);

namespace Code\State\GumballState;

class HasQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function __toString(): string
    {
        return 'waiting for turn of crank' . PHP_EOL;
    }

    public function insertQuarter(): void
    {
        echo 'You can\'t insert another quarter' . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo 'Quarter returned' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo 'You turned...' . PHP_EOL;
        $winner = rand(0, 10);
        if (10 === $winner && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense(): void
    {
        echo 'No gumball dispensed' . PHP_EOL;
    }

    public function refill(): void
    {
    }
}
