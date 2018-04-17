<?php

declare(strict_types=1);

namespace Code\Command\SimpleRemoteWL;

require_once __DIR__ . '/../../vendor/autoload.php';

$remote = new SimpleRemoteControl();
$light = new Light();
$lightOn = new LightOnCommand($light);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();
