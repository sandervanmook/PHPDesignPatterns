<?php

declare(strict_types=1);

namespace Code\Observer;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function display()
    {
        echo sprintf('Current conditions: %s degrees and %s %% humidity', $this->temperature, $this->humidity) . PHP_EOL;
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->display();
    }
}
