<?php

namespace Code\Decorator;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'DarkRoast' . $this->getSize();
    }

    public function cost(): float
    {
        return .99;
    }
}
