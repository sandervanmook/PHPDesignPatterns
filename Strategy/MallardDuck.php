<?php

declare(strict_types=1);

namespace Code\Strategy;

class MallardDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new FlyWithWings(), new Quack());
    }

    public function display()
    {
        echo 'I look like a MallardDuck';
    }
}
