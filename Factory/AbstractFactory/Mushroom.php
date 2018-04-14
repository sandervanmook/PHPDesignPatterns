<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class Mushroom implements Veggies
{
    public function __toString()
    {
        return 'Mushroom';
    }
}
