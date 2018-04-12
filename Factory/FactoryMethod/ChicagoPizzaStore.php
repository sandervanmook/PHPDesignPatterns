<?php

namespace Code\Factory\FactoryMethod;

class ChicagoPizzaStore extends PizzaStore
{
    // Protected so the client can't bypass orderPizza
    protected function createPizza(string $type): Pizza
    {
        if ('cheese' == $type) {
            return new ChicagoStyleCheesePizza();
        }
        if ('meat' == $type) {
            return new ChicagoStyleMeatPizza();
        }
    }
}
