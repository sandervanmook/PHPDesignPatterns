<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class MozzarellaCheese implements Cheese
{
    public function __toString()
    {
        return 'MozzarellaCheese';
    }
}
