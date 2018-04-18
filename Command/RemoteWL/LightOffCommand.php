<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

class LightOffCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }
}
