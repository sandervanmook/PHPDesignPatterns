<?php

declare(strict_types=1);

namespace Code\TemplateMethod;

class Coffee extends CaffeineBeverage
{
    protected function brew(): void
    {
        echo 'Dripping Coffee through filter' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo 'Adding Sugar and Milk' . PHP_EOL;
    }
}
