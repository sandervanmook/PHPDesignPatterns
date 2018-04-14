<?php

declare(strict_types=1);

namespace Code\Strategy;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I can't fly, no wings.." . PHP_EOL;
    }
}
