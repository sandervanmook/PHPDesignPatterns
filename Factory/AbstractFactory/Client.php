<?php


namespace Code\Factory\AbstractFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$nyStore = new NYStylePizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$nycheese = $nyStore->orderPizza('cheese');
$chicagoMeat = $chicagoStore->orderPizza('meat');
