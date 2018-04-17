<?php

declare(strict_types=1);

namespace Code\Command\SimpleRemoteWL;

class Light
{
    public function on()
    {
        echo 'The light is On' . PHP_EOL;
    }

    public function off()
    {
        echo 'The light is Off' . PHP_EOL;
    }
}
