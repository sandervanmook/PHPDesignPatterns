<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class CheesePizza extends Pizza
{
    private $ingredientFactory;

    // You could set the constructor in the parent so you don't need to worry about it in the child.
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo 'Preparing ' . $this->getName() . PHP_EOL;
        $this->dough   = $this->ingredientFactory->createDough();
        $this->sauce   = $this->ingredientFactory->createSauce();
        $this->cheese  = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }
}
