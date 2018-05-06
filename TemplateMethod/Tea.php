<?php

declare(strict_types=1);

namespace Code\TemplateMethod;

class Tea extends CaffeineBeverage
{
    protected function brew(): void
    {
        echo 'Steeping the tea' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo 'Adding Lemon' . PHP_EOL;
    }
}
