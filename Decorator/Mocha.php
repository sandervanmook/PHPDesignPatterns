<?php


namespace Code\Decorator;

class Mocha extends CondimentDecorator
{
    public $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost(): float
    {
        return 0.20 + $this->beverage->cost();
    }
}
