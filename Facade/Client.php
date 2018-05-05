<?php

declare(strict_types=1);

namespace Code\Facade;

require_once __DIR__ . '/../vendor/autoload.php';

$amplifier = new Amplifier('Top-O-Line Amplifier');
$tuner     = new Tuner('Top-O-Line AM/FM Tuner', $amplifier);
$dvdPlayer = new DvdPlayer('Top-O-Line DVD Player', $amplifier);
$cdPlayer  = new CdPlayer('Top-O-Line CD Player', $amplifier);
$projector = new Projector('Top-O-Line Projector', $dvdPlayer);
$lights    = new TheaterLights('Theater Ceiling Lights');
$screen    = new Screen('Theater Screen');
$popper    = new PopcornPopper('Popcorn Popper');

$homeTheaterFacade = new HomeTheaterFacade(
    $amplifier,
    $tuner,
    $dvdPlayer,
    $cdPlayer,
    $projector,
    $screen,
    $lights,
    $popper
);

$homeTheaterFacade->watchMovie('The Matrix');
$homeTheaterFacade->endMovie();

$homeTheaterFacade->listenToCd('A random CD');
$homeTheaterFacade->endCd();

$homeTheaterFacade->listenToRadio(102.50);
$homeTheaterFacade->endRadio();
