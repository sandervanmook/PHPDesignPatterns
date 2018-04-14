<?php

declare(strict_types=1);

namespace Code\Strategy;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo '*Silence*' . PHP_EOL;
    }
}
