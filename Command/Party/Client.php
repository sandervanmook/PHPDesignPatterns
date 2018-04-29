<?php

declare(strict_types=1);

namespace Code\Command\Party;

require_once __DIR__ . '/../../vendor/autoload.php';

// This class is the client in the Command Pattern design.

// The remote is the invoker, it will be passed a command object that can be used to make requests.
$remote = new RemoteControl();

// Create all the devices in the proper locations
$livingRoomLight         = new Light('Living Room');
$tvLivingRoom            = new TV('Living Room');
$stereoLivingRoom        = new Stereo('Living Room');

// Create all the commands
$livingRoomLightOn      = new LightOnCommand($livingRoomLight);
$livingRoomLightOff     = new LightOffCommand($livingRoomLight);
$tvLigingRoomOn         = new TVOnCommand($tvLivingRoom);
$tvLivingRoomOff        = new TVOffCommand($tvLivingRoom);
$stereoOnWithCD         = new StereoOnWithCDCommand($stereoLivingRoom);
$stereoOff              = new StereoOffCommand($stereoLivingRoom);

// Arrays with commands for the macro command
$partyOn  = [$livingRoomLightOn, $tvLigingRoomOn, $stereoOnWithCD];
$partyOff = [$livingRoomLightOff, $tvLivingRoomOff, $stereoOff];

// Create the macro commands
$partyOnMacro  = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOff);

// Bind the commands to the remote buttons
$remote->setCommand(0, $partyOnMacro, $partyOffMacro);

// Uses the __toString method
echo $remote;

echo '--- Pushing Macro On---' . PHP_EOL;
$remote->onButtonWasPushed(0);
echo '--- Pushing Macro Off---' . PHP_EOL;
$remote->offButtonWasPushed(0);
echo 'hit undo button' . PHP_EOL;
$remote->undoButtonWasPushed();
