<?php

declare(strict_types=1);

namespace Code\Singleton;

require_once __DIR__ . '/../vendor/autoload.php';

$classicSingleton = Singleton::getInstance();
echo $classicSingleton->getDescription();

echo PHP_EOL;

$chocolateBoiler  = ChocolateBoiler::getInstance();
$chocolateBoiler2 = ChocolateBoiler::getInstance();
