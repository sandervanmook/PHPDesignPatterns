<?php

declare(strict_types=1);

namespace Code\Command\Party;

class MacroCommand implements Command
{
    private $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        for ($i = 0; $i < count($this->commands); ++$i) {
            $this->commands[$i]->execute();
        }
    }

    public function undo(): void
    {
        for ($i = count($this->commands) - 1; $i >= 0; --$i) {
            $this->commands[$i]->undo();
        }
    }
}
