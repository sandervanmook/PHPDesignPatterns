<?php

declare(strict_types=1);

namespace Code\Factory\FactoryMethod;

class ChicagoStyleMeatPizza extends Pizza
{
    protected $name = 'Chicago Style Meat Pizza';

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }
}
