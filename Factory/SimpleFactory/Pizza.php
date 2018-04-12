<?php

declare(strict_types=1);


namespace Code\Factory\SimpleFactory;

interface Pizza
{
    public function prepare();

    public function bake();

    public function cut();

    public function box();
}
