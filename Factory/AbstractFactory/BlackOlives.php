<?php

declare(strict_types=1);

namespace Code\Factory\AbstractFactory;

class BlackOlives implements Veggies
{
    public function __toString()
    {
        return 'BlackOlives';
    }
}
