<?php

namespace Code\Strategy;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I can't fly, no wings.." . PHP_EOL;
    }
}
