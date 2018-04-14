<?php

declare(strict_types=1);

namespace Strategy;

require_once __DIR__ . '/../vendor/autoload.php';

use Code\Strategy\FlyRocketPowered;
use Code\Strategy\MallardDuck;
use Code\Strategy\ModelDuck;

$mallard = new MallardDuck();
$mallard->performFly();
$mallard->performQuack();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
