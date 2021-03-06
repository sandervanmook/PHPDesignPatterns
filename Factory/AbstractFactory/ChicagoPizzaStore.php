<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class ChicagoPizzaStore extends PizzaStore
{
    private $ingredientFactory;

    public function __construct()
    {
        $this->ingredientFactory = new ChicagoPizzaIngredientFactory();
    }

    // Protected so the client can't bypass orderPizza
    protected function createPizza(string $type): Pizza
    {
        if ('cheese' == $type) {
            $pizza = new CheesePizza($this->ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        }
        if ('clam' == $type) {
            $pizza = new ClamPizza($this->ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        }

        return $pizza;
    }
}
