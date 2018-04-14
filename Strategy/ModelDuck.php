<?php

declare(strict_types=1);

namespace Code\Strategy;

class ModelDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new FlyNoWay(), new Quack());
    }

    public function display()
    {
        echo 'I look like a model Duck' . PHP_EOL;
    }
}
