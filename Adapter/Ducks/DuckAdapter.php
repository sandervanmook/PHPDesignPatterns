<?php

declare(strict_types=1);

namespace Code\Adapter\Ducks;

class DuckAdapter implements Turkey
{
    private $duck;

    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    public function gobble(): void
    {
        $this->duck->quack();
    }

    public function fly(): void
    {
        if (0 == rand(0, 5)) {
            $this->duck->fly();
        }
    }
}
