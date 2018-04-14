<?php

declare(strict_types=1);

namespace Code\Factory\FactoryMethod;

class NYStylePizzaStore extends PizzaStore
{
    // Protected so the client can't bypass orderPizza
    protected function createPizza(string $type): Pizza
    {
        if ('cheese' == $type) {
            return new NYStyleCheesePizza();
        }
        if ('veggie' == $type) {
            return new NYStyleVeggiePizza();
        }
    }
}
