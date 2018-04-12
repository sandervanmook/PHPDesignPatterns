<?php


namespace Code\Strategy;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak' . PHP_EOL;
    }
}
