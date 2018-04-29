<?php

declare(strict_types=1);

namespace Code\Adapter\Ducks;

interface Turkey
{
    public function gobble(): void;

    public function fly(): void;
}
