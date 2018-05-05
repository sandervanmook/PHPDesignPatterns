<?php

declare(strict_types=1);

namespace Code\Facade;

class HomeTheaterFacade
{
    private $tuner;
    private $projector;
    private $lights;
    private $screen;
    private $popper;
    private $amplifier;
    private $dvdPlayer;
    private $cdPlayer;

    public function __construct(
        Amplifier $amplifier,
        Tuner $tuner,
        DvdPlayer $dvdPlayer,
        CdPlayer $cdPlayer,
        Projector $projector,
        Screen $screen,
        TheaterLights $lights,
        PopcornPopper $popper
    ) {
        $this->amplifier = $amplifier;
        $this->tuner     = $tuner;
        $this->dvdPlayer = $dvdPlayer;
        $this->cdPlayer  = $cdPlayer;
        $this->projector = $projector;
        $this->screen    = $screen;
        $this->lights    = $lights;
        $this->popper    = $popper;
    }

    public function watchMovie(string $movie): void
    {
        echo 'Get ready to watch a movie...' . PHP_EOL;
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amplifier->on();
        $this->amplifier->setDvd($this->dvdPlayer);
        $this->amplifier->setSurroundSound();
        $this->amplifier->setVolume(5);
        $this->dvdPlayer->on();
        $this->dvdPlayer->playMovie($movie);
    }

    public function endMovie(): void
    {
        echo 'Shutting movie theater down...' . PHP_EOL;
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amplifier->off();
        $this->dvdPlayer->stop();
        $this->dvdPlayer->eject();
        $this->dvdPlayer->off();
    }

    public function listenToCd(string $cdTitle)
    {
        echo 'Get ready for an audiopile experence...' . PHP_EOL;
        $this->lights->on();
        $this->amplifier->on();
        $this->amplifier->setVolume(5);
        $this->amplifier->setCd($this->cdPlayer);
        $this->amplifier->setStereoSound();
        $this->cdPlayer->on();
        $this->cdPlayer->playTitle($cdTitle);
    }

    public function endCd(): void
    {
        echo 'Shutting down CD...' . PHP_EOL;
        $this->amplifier->off();
        $this->amplifier->setCd($this->cdPlayer);
        $this->cdPlayer->eject();
        $this->cdPlayer->off();
    }

    public function listenToRadio(float $frequency): void
    {
        echo 'Tuning in the airwaves...' . PHP_EOL;
        $this->tuner->on();
        $this->tuner->setFrequency($frequency);
        $this->amplifier->on();
        $this->amplifier->setVolume(5);
        $this->amplifier->setTuner($this->tuner);
    }

    public function endRadio(): void
    {
        echo 'Shutting down the tuner...' . PHP_EOL;
        $this->tuner->off();
        $this->amplifier->off();
    }
}
