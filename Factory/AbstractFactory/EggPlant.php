<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class EggPlant implements Veggies
{
    public function __toString()
    {
        return 'EggPlant';
    }
}
