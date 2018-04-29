<?php

declare(strict_types=1);

namespace Code\Command\Party;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}
