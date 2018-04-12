<?php


namespace Code\Decorator;

require_once __DIR__ . '/../vendor/autoload.php';

$espresso = new Espresso();
echo $espresso->getDescription() . PHP_EOL;

/*
 * There is a lot of object creation happening here,
 * (program to an interface not an implementation)
 * maybe create a factory for beverages and condiments to
 * encapsulate object creation (change) ?
 */

$darkRoast = new DarkRoast();
$darkRoast->setSize(Beverage::LARGE);
$soy = new Soy($darkRoast);
echo $soy->getDescription();
echo $soy->cost() . PHP_EOL;
$whip = new Whip($soy);
echo $whip->getDescription();
echo $whip->cost() . PHP_EOL;
