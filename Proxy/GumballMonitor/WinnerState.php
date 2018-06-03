<?php

declare(strict_types=1);

namespace Code\Proxy\GumballMonitor;

class WinnerState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function __toString(): string
    {
        return 'dispensing two gumballs for your quarter, because YOU\'RE A WINNER!' . PHP_EOL;
    }

    public function insertQuarter(): void
    {
        echo 'Please wait, we\'re already giving you a Gumball' . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo 'Please wait, we\'re already giving you a Gumball' . PHP_EOL;
    }

    public function turnCrank(): void
    {
        echo 'Turning again doesn\'t get you another gumball!' . PHP_EOL;
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();
        if (0 == $this->gumballMachine->getCount()) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            echo 'YOU\'RE A WINNER! You got two gumballs for your quarter' . PHP_EOL;
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo 'Oops, out of gumballs!' . PHP_EOL;
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }

    public function refill(): void
    {
    }
}
