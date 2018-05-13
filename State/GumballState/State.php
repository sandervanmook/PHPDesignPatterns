<?php

declare(strict_types=1);

namespace Code\State\GumballState;

interface State
{
    public function insertQuarter(): void;

    public function ejectQuarter(): void;

    public function turnCrank(): void;

    public function dispense(): void;

    public function refill(): void;
}
