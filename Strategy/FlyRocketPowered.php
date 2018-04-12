<?php

namespace Code\Strategy;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying with a rocket" . PHP_EOL;
    }
}
