<?php

declare(strict_types=1);

namespace Code\Iterator;

class MenuItem
{
    private $name;
    private $description;
    private $vegetarian;
    private $price;

    public function __construct(
        string $name,
        string $description,
        bool $vegetarian,
        float $price
    ) {
        $this->name        = $name;
        $this->description = $description;
        $this->vegetarian  = $vegetarian;
        $this->price       = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
