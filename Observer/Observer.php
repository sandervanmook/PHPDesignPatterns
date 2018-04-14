<?php

declare(strict_types=1);

namespace Code\Observer;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure);
}
