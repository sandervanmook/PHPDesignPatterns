<?php


namespace Code\Factory\AbstractFactory;

abstract class Pizza
{
    protected $name = '';
    protected $dough = '';
    protected $sauce = '';
    protected $toppings = [];

    public function prepare() : void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
    }

    public function bake() : void
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut() : void
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box() : void
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }
}
