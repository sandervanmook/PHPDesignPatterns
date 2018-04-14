<?php

declare(strict_types=1);

namespace Code\Strategy;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying with a rocket" . PHP_EOL;
    }
}
