<?php

declare(strict_types=1);

namespace Code\State\Gumball;

class GumballMachine
{
    /**
     * This is an example of bad design, we are going to fix it in the other
     * folder by using the State pattern.
     */
    const SOLD_OUT    = 0;
    const NO_QUARTER  = 1;
    const HAS_QUARTER = 2;
    const SOLD        = 3;

    private $state = self::SOLD_OUT;
    private $count = 0;

    public function __toString()
    {
        $thisYear = date('Y');
        $result   = '';
        $result .= 'Mighty Gumball, Inc.' . PHP_EOL;
        $result .= "PHP-enabled Standing Gumball Model #{$thisYear}" . PHP_EOL;
        $result .= sprintf('Inventory: %d gumball(s)', $this->count) . PHP_EOL;
        $result .= 'Machine is ';

        switch ($this->state) {
            case 0:
                $result .= 'sold out' . PHP_EOL;
                break;
            case 1:
                $result .= 'waiting for quarter' . PHP_EOL;
                break;
            case 2:
                $result .= 'waiting for turn of crank' . PHP_EOL;
                break;
            case 3:
                $result .= 'delivering a gumball' . PHP_EOL;
                break;
        }

        return $result;
    }

    public function __construct(int $count)
    {
        $this->count = $count;
        if ($this->count > 0) {
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter(): void
    {
        if (self::HAS_QUARTER == $this->state) {
            echo 'You can\'t insert another quarter' . PHP_EOL;
        } elseif (self::NO_QUARTER == $this->state) {
            $this->state = self::HAS_QUARTER;
            echo 'You inserted a quarter' . PHP_EOL;
        } elseif (self::SOLD_OUT == $this->state) {
            echo 'You can\'t insert a quarter, the machine is sold out' . PHP_EOL;
        } elseif (self::SOLD == $this->state) {
            echo 'Please wait, we\'re already giving you a gumball' . PHP_EOL;
        }
    }

    public function ejectQuarter(): void
    {
        if (self::HAS_QUARTER == $this->state) {
            echo 'Quarter returned' . PHP_EOL;
            $this->state = self::NO_QUARTER;
        } elseif (self::NO_QUARTER == $this->state) {
            echo 'You haven\'t inserted a quarter' . PHP_EOL;
        } elseif (self::SOLD_OUT == $this->state) {
            echo 'You can\'t eject, you haven\'t inserted a quarter yet' . PHP_EOL;
        } elseif (self::SOLD == $this->state) {
            echo 'Sorry, you already turned the crank' . PHP_EOL;
        }
    }

    public function turnCrank(): void
    {
        if (self::HAS_QUARTER == $this->state) {
            echo 'You turned...' . PHP_EOL;
            $this->state = self::SOLD;
            $this->dispense();
        } elseif (self::NO_QUARTER == $this->state) {
            echo 'You turned but there\'s no quarter' . PHP_EOL;
        } elseif (self::SOLD_OUT == $this->state) {
            echo 'You turned, but there are no gumballs' . PHP_EOL;
        } elseif (self::SOLD == $this->state) {
            echo 'Turning twice doesn\'t get you another gumball!' . PHP_EOL;
        }
    }

    public function dispense(): void
    {
        if (self::SOLD == $this->state) {
            echo 'A gumball comes rolling out the slot' . PHP_EOL;
            --$this->count;
            if (0 == $this->count) {
                echo 'Oops, out of gumballs!' . PHP_EOL;
                $this->state = self::SOLD_OUT;
            } else {
                $this->state = self::NO_QUARTER;
            }
        } elseif (self::NO_QUARTER == $this->state) {
            echo 'You need to pay first' . PHP_EOL;
        } elseif (self::SOLD_OUT == $this->state) {
            echo 'No gumball dispensed' . PHP_EOL;
        } elseif (self::HAS_QUARTER == $this->state) {
            echo 'No gumball dispensed' . PHP_EOL;
        }
    }

    public function refill(int $numGumBalls): void
    {
        $this->count = $numGumBalls;
        $this->state = self::NO_QUARTER;
    }
}
