<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

class GarageDoorUpCommand implements Command
{
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->up();
    }
}
