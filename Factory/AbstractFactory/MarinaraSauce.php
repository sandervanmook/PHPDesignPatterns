<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class MarinaraSauce implements Sauce
{
    public function __toString()
    {
        return 'MarinaraSauce';
    }
}
