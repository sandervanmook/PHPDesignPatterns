<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class FrozenClams implements Clam
{
    public function __toString()
    {
        return 'FrozenClams';
    }
}
