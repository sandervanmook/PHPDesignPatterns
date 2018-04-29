<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

class CeilingFanMediumCommand implements Command
{
    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->medium();
    }

    public function undo(): void
    {
        if ($this->prevSpeed == $this->ceilingFan::HIGH) {
            $this->ceilingFan->high();
        } elseif ($this->prevSpeed == $this->ceilingFan::MEDIUM) {
            $this->ceilingFan->medium();
        } elseif ($this->prevSpeed == $this->ceilingFan::LOW) {
            $this->ceilingFan->low();
        } elseif ($this->prevSpeed == $this->ceilingFan::OFF) {
            $this->ceilingFan->off();
        }
    }
}
