<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class Spinach implements Veggies
{
    public function __toString()
    {
        return 'Spinach';
    }
}
