<?php


namespace Code\Decorator;

class Whip extends CondimentDecorator
{
    public $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost(): float
    {
        return 0.10 + $this->beverage->cost();
    }
}
