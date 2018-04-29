<?php

declare(strict_types=1);

namespace Code\Adapter;

use Code\Adapter\Ducks\MallardDuck;
use Code\Adapter\Ducks\TurkeyAdapter;
use Code\Adapter\Ducks\WildTurkey;

require_once __DIR__ . '/../../vendor/autoload.php';

$mallardDuck = new MallardDuck();

$wildTurkey    = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($wildTurkey);

echo 'The Turkey says...' . PHP_EOL;
$wildTurkey->gobble();
$wildTurkey->fly();

echo 'The Duck says...' . PHP_EOL;
$mallardDuck->quack();
$mallardDuck->fly();

echo 'The TurkeyAdapter says...' . PHP_EOL;
$turkeyAdapter->quack();
$turkeyAdapter->fly();
