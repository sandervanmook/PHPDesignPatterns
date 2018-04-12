<?php


namespace Code\Strategy;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo '*Silence*' . PHP_EOL;
    }
}
