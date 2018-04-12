<?php

declare(strict_types=1);

namespace Code\Factory\FactoryMethod;

abstract class PizzaStore
{
    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    // Protected so the client can't bypass orderPizza
    abstract protected function createPizza(string $type): Pizza;
}
