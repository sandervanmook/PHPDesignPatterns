<?php

declare(strict_types=1);


namespace Code\Factory\SimpleFactory;

class SimplePizzaFactory
{
    public function createPizza(string $type) : Pizza
    {
        if ($type == 'cheese') {
            return new CheesePizza();
        }

        if ($type == 'veggie') {
            return new VeggiePizza();
        }
    }
}
