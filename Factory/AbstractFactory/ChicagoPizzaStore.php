<?php


namespace Code\Factory\AbstractFactory;

class ChicagoPizzaStore extends PizzaStore
{
    // Protected so the client can't bypass orderPizza
    protected function createPizza(string $type): Pizza
    {
        if ($type == 'cheese') {
            return new ChicagoStyleCheesePizza();
        }
        if ($type == 'meat') {
            return new ChicagoStyleMeatPizza();
        }
    }
}
