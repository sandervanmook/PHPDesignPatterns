<?php

declare(strict_types=1);

namespace Code\Factory\SimpleFactory;

class VeggiePizza implements Pizza
{
    private $name = 'Veggie Pizza';

    public function prepare()
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
    }

    public function bake()
    {
        echo 'Bake for 30 minutes at 350' . PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }

    public function box()
    {
        echo 'Place pizza in original PizzaStore box' . PHP_EOL;
    }
}
