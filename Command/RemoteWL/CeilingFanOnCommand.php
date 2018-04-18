<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

class CeilingFanOnCommand implements Command
{
    private $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->ceilingFan->high();
    }
}
