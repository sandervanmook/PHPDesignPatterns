<?php

declare(strict_types=1);

namespace Code\TemplateMethod;

require_once __DIR__ . '/../vendor/autoload.php';

$tea    = new Tea();
$coffee = new Coffee();

echo 'Making Tea' . PHP_EOL;
$tea->prepareRecipe();
echo 'Making Coffee' . PHP_EOL;
$coffee->prepareRecipe();

$teaHook    = new TeaWithHook();
$coffeeHook = new CoffeeWithHook();

// Run this from the cli with 'y' to add condiments or anything else to have no condiments.
echo 'Making Tea' . PHP_EOL;
$teaHook->prepareRecipe();
echo 'Making Coffee' . PHP_EOL;
$coffeeHook->prepareRecipe();
