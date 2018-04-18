<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

class StereoOffCommand implements Command
{
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }
}
