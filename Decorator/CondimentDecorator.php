<?php

declare(strict_types=1);

namespace Code\Decorator;

abstract class CondimentDecorator extends Beverage
{
    public function getDescription(): string
    {
        return $this->description;
    }
}
