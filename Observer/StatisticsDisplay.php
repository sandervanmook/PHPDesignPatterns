<?php

namespace Code\Observer;

class StatisticsDisplay implements Observer, DisplayElement
{
    private $maxTemp     = 45;
    private $minTemp     = 0;
    private $tempSum     = 45;
    private $numReadings = 1;
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        echo 'Avg/Max/Min temperature = ' . $this->tempSum / $this->numReadings . '/' . $this->maxTemp . '/' . $this->minTemp . PHP_EOL;
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->tempSum += $temperature;
        ++$this->numReadings;

        if ($temperature > $this->maxTemp) {
            $this->maxTemp = $temperature;
        }

        if ($temperature < $this->minTemp) {
            $this->minTemp = $temperature;
        }

        $this->display();
    }
}
