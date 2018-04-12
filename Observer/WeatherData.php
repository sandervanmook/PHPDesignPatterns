<?php


namespace Code\Observer;

class WeatherData implements Subject
{
    private $observers = [];
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct()
    {
        settype($this->temperature, 'float');
        settype($this->humidity, 'float');
        settype($this->pressure, 'float');
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(Observer $observer)
    {
        if (!empty($this->observers)) {
            foreach ($this->observers as $k => $v) {
                if ($observer == $v) {
                    unset($this->observers[$k]);
                }
            }
        }
    }

    public function notifyObservers()
    {
        if (!empty($this->observers)) {
            foreach ($this->observers as $observer) {
                $observer->update($this->temperature, $this->humidity, $this->pressure);
            }
        }
    }

    /**
     * Method to set fake input data, this would normally come from somewhere else.
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature  = $temperature;
        $this->humidity     = $humidity;
        $this->pressure     = $pressure;
        $this->measurementsChanged();
    }
}
