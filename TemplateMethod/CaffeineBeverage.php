<?php

declare(strict_types=1);

namespace Code\TemplateMethod;

abstract class CaffeineBeverage
{
    /**
     * This is the template method.
     * It serves as a template for an algorithm.
     * Final because we don't want subclasses to change this.
     */
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract protected function brew(): void;

    abstract protected function addCondiments(): void;

    protected function boilWater(): void
    {
        echo 'Boiling water' . PHP_EOL;
    }

    protected function pourInCup(): void
    {
        echo 'Pouring into cup' . PHP_EOL;
    }
}
