<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class Garlic implements Veggies
{
    public function __toString()
    {
        return 'Garlic';
    }
}
