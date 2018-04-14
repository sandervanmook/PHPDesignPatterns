<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

abstract class Pizza
{
    protected $name = 'Unknown';
    protected $dough;
    protected $sauce;
    protected $veggies;
    protected $cheese;
    protected $pepperoni;
    protected $clam;

    public function __toString(): string
    {
        return $this->name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    abstract public function prepare();

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }

    // Just to show whats on the pizza in the Client.
    public function includes()
    {
        echo 'I include :' . PHP_EOL;
        echo $this->cheese . PHP_EOL;
        echo $this->sauce . PHP_EOL;
        echo $this->dough . PHP_EOL;
        echo $this->pepperoni . PHP_EOL;
        echo $this->clam . PHP_EOL;
        foreach ($this->veggies as $veggy) {
            echo $veggy . PHP_EOL;
        }
    }
}
