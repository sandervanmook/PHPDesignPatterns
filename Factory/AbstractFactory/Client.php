<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$nyStore      = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$nyCheese    = $nyStore->orderPizza('cheese');
$nyCheese->includes();
$nyClam = $nyStore->orderPizza('clam');
$nyClam->includes();

$chicagoClam = $chicagoStore->orderPizza('clam');
$chicagoClam->includes();
$chicagoCheese = $chicagoStore->orderPizza('cheese');
$chicagoCheese->includes();
