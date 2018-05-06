<?php

declare(strict_types=1);

namespace Code\TemplateMethod;

abstract class CaffeineBeverageWithHook
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        // This is a hook.
        // The subclasses return false by default, if a subclass wants different behavior it returns true.
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
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

    // Hook does nothing by default. Overwrite in subclass to add behavior.
    protected function customerWantsCondiments(): bool
    {
        return true;
    }
}
