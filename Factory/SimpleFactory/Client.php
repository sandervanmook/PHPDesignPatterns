<?php

declare(strict_types=1);

namespace Code\Factory\SimpleFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$store       = new PizzaStore(new SimplePizzaFactory());

$cheesePizza = $store->orderPizza('cheese');

$veggiePizza = $store->orderPizza('veggie');
