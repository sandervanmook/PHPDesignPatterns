<?php

declare(strict_types=1);

namespace Code\State\GumballState;

class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;

    private $state;
    private $count = 0;

    public function __construct(int $numberGumballs)
    {
        $this->soldOutState    = new SoldOutState($this);
        $this->noQuarterState  = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState       = new SoldState($this);

        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function __toString(): string
    {
        $thisYear = date('Y');
        $result   = '';
        $result .= 'Mighty Gumball, Inc.' . PHP_EOL;
        $result .= "PHP-enabled Standing Gumball Model #{$thisYear}" . PHP_EOL;
        $result .= sprintf('Inventory: %d gumball(s)', $this->count) . PHP_EOL;
        $result .= 'Machine is ' . $this->state . PHP_EOL;

        return $result;
    }

    public function insertQuarter(): void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function releaseBall(): void
    {
        echo 'A gumball comes rolling out the slot...' . PHP_EOL;
        if (0 != $this->count) {
            --$this->count;
        }
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function refill(int $count): void
    {
        $this->count += $count;
        echo 'The gumball machine was just refilled; it\'s new count is: ' . $this->count . PHP_EOL;
        $this->state->refill();
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }

    public function getSoldState(): State
    {
        return $this->soldState;
    }

    public function getState(): State
    {
        return $this->state;
    }
}
