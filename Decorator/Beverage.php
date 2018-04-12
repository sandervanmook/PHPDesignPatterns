<?php


namespace Code\Decorator;

abstract class Beverage
{
    const SMALL = 'small';
    const MEDIUM = 'medium';
    const LARGE = 'large';

    protected $description = '“Unknown Beverage';
    protected $size = self::MEDIUM;

    public function getDescription() : string
    {
        return $this->description;
    }

    abstract public function cost() : float;

    /**
     * @throws \Exception
     */
    public function setSize(string $size) : void
    {
        $sizes = [
            self::SMALL,
            self::MEDIUM,
            self::LARGE,
        ];
        // Insert custom exception here.
        if (!in_array($size, $sizes)) {
            throw new \Exception('Size not supported');
        }

        $this->size = $size;
    }

    public function getSize() :string
    {
        return $this->size;
    }

    public function isSmallSize() : bool
    {
        return $this->size == self::SMALL ? true : false;
    }

    public function isMediumSize() : bool
    {
        return $this->size == self::MEDIUM ? true : false;
    }

    public function isLargeSize() : bool
    {
        return $this->size == self::LARGE ? true : false;
    }
}
