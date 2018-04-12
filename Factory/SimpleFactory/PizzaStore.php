<?php

declare(strict_types=1);

namespace Code\Factory\SimpleFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

class PizzaStore
{
    private $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
