<?php


namespace Code\Factory\AbstractFactory;

class NYStylePizzaStore extends PizzaStore
{
    // Protected so the client can't bypass orderPizza
    protected function createPizza(string $type) : Pizza
    {
        if ($type == 'cheese') {
            return new NYStyleCheesePizza();
        }
        if ($type == 'veggie') {
            return new NYStyleVeggiePizza();
        }
    }
}
