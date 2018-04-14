<?php

declare(strict_types=1);

namespace Code\Factory\FactoryMethod;

class NYStyleCheesePizza extends Pizza
{
    protected $name = 'NY Style Cheese Pizza';

    public function bake(): void
    {
        echo 'Bake for 20 minutes at 350' . PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in custom PizzaStore box' . PHP_EOL;
    }
}
