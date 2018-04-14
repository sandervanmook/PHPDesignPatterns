<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class FreshClams implements Clam
{
    public function __toString()
    {
        return 'FreshClams';
    }
}
