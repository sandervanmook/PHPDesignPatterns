<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class SlicedPepperoni implements Pepperoni
{
    public function __toString()
    {
        return 'SlicedPepperoni';
    }
}
