<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

class RemoteControl
{
    const BUTTONS_ON_CONTROL = 7;

    private $onCommands  = [];
    private $offCommands = [];

    // We fill the unused 'buttons' with null objects so we don't need to check for null.
    public function __construct()
    {
        for ($i = 0; $i < self::BUTTONS_ON_CONTROL; ++$i) {
            $this->onCommands[$i]  = new NoCommand();
            $this->offCommands[$i] = new NoCommand();
        }
    }

    public function __toString()
    {
        $string = '';
        $string .= PHP_EOL . '------ Remote Control -------' . PHP_EOL;

        for ($i = 0; $i < count($this->onCommands); ++$i ) {
            $string .= sprintf('slot %d %s %s', $i, get_class($this->onCommands[$i]), get_class($this->offCommands[$i])) . PHP_EOL;
        }

        return $string;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot]  = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
    }
}
