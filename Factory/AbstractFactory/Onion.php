<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class Onion implements Veggies
{
    public function __toString()
    {
        return 'Onion';
    }
}
