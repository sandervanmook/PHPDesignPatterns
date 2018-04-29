<?php

declare(strict_types=1);

namespace Code\Command\RemoteWL;

require_once __DIR__ . '/../../vendor/autoload.php';

// This class is the client in the Command Pattern design.

// The remote is the invoker, it will be passed a command object that can be used to make requests.
$remote = new RemoteControl();

// Create all the devices in the proper locations
$livingRoomLight = new Light('Living Room');
$kitchenLight    = new Light('Kitchen');
$ceilingFan      = new CeilingFan('Living Room');
$garageDoor      = new GarageDoor('Main house');
$stereo          = new Stereo('Living Room');

// Create all the commands
$livingRoomLightOn      = new LightOnCommand($livingRoomLight);
$livingRoomLightOff     = new LightOffCommand($livingRoomLight);
$kitchenLightOn         = new LightOnCommand($kitchenLight);
$kitchenLightOff        = new LightOffCommand($kitchenLight);
$ceilingFanLow          = new CeilingFanLowCommand($ceilingFan);
$ceilingFanMedium       = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanHigh         = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOff          = new CeilingFanOffCommand($ceilingFan);
$garageDoorUp           = new GarageDoorUpCommand($garageDoor);
$garageDoorDown         = new GarageDoorDownCommand($garageDoor);
$stereoOnWithCD         = new StereoOnWithCDCommand($stereo);
$stereoOff              = new StereoOffCommand($stereo);

// Bind the commands to the remote buttons
$remote->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remote->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remote->setCommand(2, $ceilingFanLow, $ceilingFanOff);
$remote->setCommand(3, $stereoOnWithCD, $stereoOff);
$remote->setCommand(4, $garageDoorUp, $garageDoorDown);
$remote->setCommand(5, $ceilingFanMedium, $ceilingFanOff);
$remote->setCommand(6, $ceilingFanHigh, $ceilingFanOff);

// Uses the __toString method
echo $remote;

$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);
echo 'hit undo button, turn the light back on' . PHP_EOL;
$remote->undoButtonWasPushed();
$remote->onButtonWasPushed(1);
$remote->offButtonWasPushed(1);
$remote->onButtonWasPushed(2);
$remote->offButtonWasPushed(2);
$remote->onButtonWasPushed(3);
$remote->offButtonWasPushed(3);
$remote->onButtonWasPushed(4);
$remote->offButtonWasPushed(4);
$remote->onButtonWasPushed(5);
$remote->offButtonWasPushed(5);
echo 'hit undo button, set fan back to medium' . PHP_EOL;
$remote->undoButtonWasPushed();
$remote->onButtonWasPushed(6);
$remote->offButtonWasPushed(6);
echo 'hit undo button, set fan back to high' . PHP_EOL;
$remote->undoButtonWasPushed();
