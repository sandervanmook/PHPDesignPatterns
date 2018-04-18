<?php

declare(strict_types=1);

namespace Code\Command\SimpleRemoteWL;

require_once __DIR__ . '/../../vendor/autoload.php';

// This class is the client in the Command Pattern design.

// The remote is the invoker, it will be passed a command object that can be used to make requests.
$remote = new SimpleRemoteControl();

// Create the light object, this will be the receiver of the request.
$light = new Light();
// Create the command and pass in the receiver.
$lightOnCommand = new LightOnCommand($light);

$garageDoor            = new GarageDoor();
$garageDoorOpenCommand = new GarageDoorOpenCommand($garageDoor);

// Pass the command to the invoker (it will save it internally to it's only slot, in this example)
$remote->setCommand($lightOnCommand);
// Simulate that the button was pressed.
$remote->buttonWasPressed();
// Set another command to the slot of the remote
$remote->setCommand($garageDoorOpenCommand);
$remote->buttonWasPressed();
