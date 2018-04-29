<?php

declare(strict_types=1);

namespace Code\Adapter\Ducks;

interface Duck
{
    public function quack(): void;

    public function fly(): void;
}
