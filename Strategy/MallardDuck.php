<?php


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
