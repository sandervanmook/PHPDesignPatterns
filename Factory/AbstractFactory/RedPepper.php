<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class RedPepper implements Veggies
{
    public function __toString()
    {
        return 'RedPepper';
    }
}
