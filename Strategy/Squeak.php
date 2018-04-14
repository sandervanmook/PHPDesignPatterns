<?php

declare(strict_types=1);

namespace Code\Strategy;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak' . PHP_EOL;
    }
}
