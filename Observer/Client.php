<?php

namespace Code\Observer;

require_once __DIR__ . '/../vendor/autoload.php';

$weatherDataSubject = new WeatherData();
$current            = new CurrentConditionsDisplay($weatherDataSubject);
$forecast           = new ForecastDisplay($weatherDataSubject);
$stats              = new StatisticsDisplay($weatherDataSubject);

$weatherDataSubject->setMeasurements(20, 65, 30.4);
$weatherDataSubject->setMeasurements(25, 75, 29.4);
$weatherDataSubject->setMeasurements(15, 85, 31.4);

$weatherDataSubject2 = new WeatherData();
$current2            = new CurrentConditionsDisplay($weatherDataSubject2);
// The observer shows up
var_dump($weatherDataSubject2);
$weatherDataSubject2->removeObserver($current2);
// The observer is gone
var_dump($weatherDataSubject2);
