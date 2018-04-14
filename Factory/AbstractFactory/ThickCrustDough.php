<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class ThickCrustDough implements Dough
{
    public function __toString()
    {
        return 'ThickCrustDough';
    }
}
