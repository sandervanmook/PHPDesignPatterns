<?php

declare(strict_types=1);

namespace Code\Decorator;

abstract class Beverage
{
    const SMALL  = 'small';
    const MEDIUM = 'medium';
    const LARGE  = 'large';

    protected $description = '“Unknown Beverage';
    protected $size        = self::MEDIUM;

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;

    public function setSize(string $size): void
    {
        $sizes = [
            self::SMALL,
            self::MEDIUM,
            self::LARGE,
        ];

        if (! in_array($size, $sizes)) {
            throw new \RuntimeException('Size not supported');
        }

        $this->size = $size;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function isSmallSize(): bool
    {
        return self::SMALL == $this->size ? true : false;
    }

    public function isMediumSize(): bool
    {
        return self::MEDIUM == $this->size ? true : false;
    }

    public function isLargeSize(): bool
    {
        return self::LARGE == $this->size ? true : false;
    }
}
