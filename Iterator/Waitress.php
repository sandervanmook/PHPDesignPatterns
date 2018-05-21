<?php

declare(strict_types=1);

namespace Code\Iterator;

/**
 * You could choose to use 2 different Iterators (one for the Diner Menu and 1 for the PancakeHouse Menu).
 * This however would mean this class depends on 2 implementations, and if more menu's are added even more.
 * Now we use the SPL ArrayIterator, 1 interface all menu's use.
 *
 * Because all menu's use the same Menu interface this class is not bound to concrete implementation of the menu's.
 */
class Waitress
{
    private $pancakeHouseMenu;
    private $dinerMenu;

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu        = $dinerMenu;
    }

    public function printMenu(): void
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator   = $this->dinerMenu->createIterator();

        echo 'BREAKFAST MENU' . PHP_EOL;
        $this->getMenu($pancakeIterator);
        echo 'DINNER MENU' . PHP_EOL;
        $this->getMenu($dinerIterator);
    }

    // If you don't use a Iterator you might need more than 1 loop depending on the implementation.
    private function getMenu(\ArrayIterator $iterator): void
    {
        while ($iterator->valid()) {
            $menuItem = $iterator->current();
            echo $menuItem->getName() . ', ';
            echo $menuItem->getPrice() . ' -- ';
            echo $menuItem->getDescription() . PHP_EOL;
            $iterator->next();
        }
    }

    public function printVegetarianMenu()
    {
        echo 'VEGETARIAN MENU' . PHP_EOL;
        $this->getVegetarianMenu($this->pancakeHouseMenu->createIterator());
        $this->getVegetarianMenu($this->dinerMenu->createIterator());
    }

    private function getVegetarianMenu(\ArrayIterator $iterator): void
    {
        while ($iterator->valid()) {
            $menuItem = $iterator->current();
            if ($menuItem->isVegetarian()) {
                echo $menuItem->getName() . ', ';
                echo $menuItem->getPrice() . ' -- ';
                echo $menuItem->getDescription() . PHP_EOL;
            }
            $iterator->next();
        }
    }

    public function isItemVegetarian(string $name): bool
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        if ($this->isVegetarian($name, $pancakeIterator)) {
            return true;
        }
        $dinerIterator = $this->dinerMenu->createIterator();
        if ($this->isVegetarian($name, $dinerIterator)) {
            return true;
        }

        return false;
    }

    private function isVegetarian(string $name, \ArrayIterator $iterator): bool
    {
        while ($iterator->valid()) {
            $menuItem = $iterator->current();
            if ($menuItem->getName() == $name) {
                if ($menuItem->isVegetarian()) {
                    return true;
                }
            }
            $iterator->next();
        }

        return false;
    }
}
