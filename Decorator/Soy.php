<?php


namespace Code\Decorator;

class Soy extends CondimentDecorator
{
    public $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost(): float
    {
        // Check the size of the beverage, not of the current class.
        if ($this->beverage->isSmallSize()) {
            return 0.10 + $this->beverage->cost();
        }

        if ($this->beverage->isMediumSize()) {
            return 0.15 + $this->beverage->cost();
        }

        if ($this->beverage->isLargeSize()) {
            return 0.20 + $this->beverage->cost();
        }

        return 0.20 + $this->beverage->cost();
    }
}
