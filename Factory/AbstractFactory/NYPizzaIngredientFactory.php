<?php

namespace Code\Factory\AbstractFactory;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies()
    {
        return [];
    }

    public function createPepperoni(): Pepperoni
    {
        // TODO: Implement createPepperoni() method.
    }

    public function createClam(): Clam
    {
        // TODO: Implement createClam() method.
    }
}
