<?php

declare(strict_types=1);

namespace Code\Composite;

/**
 * Because not all methods make sense in different contexts the default
 * implementation is to throw a exception. This way if a concrete class
 * inherits a method it doesn't use it can just do nothing with it.
 */
abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent): void
    {
        throw new \RuntimeException();
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new \RuntimeException();
    }

    public function getChild(int $i): MenuComponent
    {
        throw new \RuntimeException();
    }

    public function getName(): string
    {
        throw new \RuntimeException();
    }

    public function getDescription(): string
    {
        throw new \RuntimeException();
    }

    public function getPrice(): float
    {
        throw new \RuntimeException();
    }

    public function isVegetarian(): bool
    {
        throw new \RuntimeException();
    }

    abstract public function createIterator();

    public function print(): void
    {
        throw new \RuntimeException();
    }
}
