<?php

declare(strict_types=1);

namespace Code\Command\SimpleRemoteWL;

class SimpleRemoteControl
{
    private $slot;

    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}
