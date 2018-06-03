<?php

declare(strict_types=1);

namespace Code\Iterator;

use Doctrine\Common\Collections\ArrayCollection;

class PancakeHouseMenu implements Menu
{
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = new ArrayCollection();
        $this->addItem(
            "K&B's Pancake Breakfast",
            'Pancakes with scrambled eggs, and toast',
            true,
            2.99
        );
        $this->addItem(
            'Regular Pancake Breakfast',
            'Pancakes with fried eggs, sausage',
            false,
            2.99
        );
        $this->addItem(
            'Blueberry Pancakes',
            'Pancakes made with fresh blueberries, and blueberry syrup',
            true,
            3.49
        );
        $this->addItem(
            'Waffles',
            'Waffles, with your choice of blueberries or strawberries',
            true,
            3.59
        );
    }

    public function addItem(
        string $name,
        string $description,
        bool $vegetarian,
        float $price
    ): void {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems->add($menuItem);
    }

    // Don't use this getter as it exposes the implementation
    //    public function getMenuItems(): ArrayCollection
    //    {
    //        return $this->menuItems;
    //    }

    public function createIterator(): \ArrayIterator
    {
        return $this->menuItems->getIterator();
    }

    // Other menu methods here
}
