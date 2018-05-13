<?php

declare(strict_types=1);

namespace Code\State\Gumball;

require_once __DIR__ . '/../../vendor/autoload.php';

$gumballMachine = new GumballMachine(5);

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->ejectQuarter();

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;
