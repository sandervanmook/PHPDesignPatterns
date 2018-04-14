<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class ThinCrustDough implements Dough
{
    public function __toString()
    {
        return 'ThinCrustDough';
    }
}
