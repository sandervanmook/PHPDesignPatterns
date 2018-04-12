<?php

namespace Code\Strategy;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'I fly because I have wings' . PHP_EOL;
    }
}
