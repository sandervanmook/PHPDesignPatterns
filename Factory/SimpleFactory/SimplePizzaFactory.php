<?php

declare(strict_types=1);

namespace Code\Factory\SimpleFactory;

class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
        if ('cheese' == $type) {
            return new CheesePizza();
        }

        if ('veggie' == $type) {
            return new VeggiePizza();
        }
    }
}
