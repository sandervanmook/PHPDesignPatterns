<?php

declare(strict_types=1);

namespace Code\Factory\SimpleFactory;

class CheesePizza implements Pizza
{
    private $name = 'Cheese Pizza';

    public function prepare()
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
    }

    public function bake()
    {
        echo 'Bake for 20 minutes at 350' . PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }

    public function box()
    {
        echo 'Place pizza in custom PizzaStore box' . PHP_EOL;
    }
}
