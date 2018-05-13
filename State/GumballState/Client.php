<?php

declare(strict_types=1);

namespace Code\State\GumballState;

require_once __DIR__ . '/../../vendor/autoload.php';

$gumballMachine = new GumballMachine(2);

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->refill(5);
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;
