<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class PlumTomatoSauce implements Sauce
{
    public function __toString()
    {
        return 'PlumTomatoSauce';
    }
}
