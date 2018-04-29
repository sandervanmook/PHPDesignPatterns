<?php

declare(strict_types=1);

namespace Code\Command\Party;

/**
 * Class NoCommand
 * Example of a null object.
 */
class NoCommand implements Command
{
    public function execute(): void
    {
    }

    public function undo(): void
    {
    }
}
