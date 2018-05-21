<?php

declare(strict_types=1);

namespace Code\Iterator;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * The original example solved the problem of 2 or more menu's
 * having different implementations working together in the waitress class.
 * As the implementation of Array's is different in PHP, I choose to make the DinerMenu
 * a normal PHP array and for the PancakeHouseMenu I am using the Doctrine array collection.
 * This way the collections have a different implementation and we use the Iterator interface to overcome this problem.
 * I have chosen to use the SPL ArrayIterator interface as it comes with PHP, you could create your own interface with
 * implementation if you'd like.
 *
 * The primary goal of this example is to show that if you have collections implemented in different ways,
 * in this case Array vs ArrayCollection (which is not that big of a difference, but that's not the point),
 * you can use a Iterator interface to let them work together and hide their concrete implementations from the
 * client (waitress). If you would not hide the implementation, and other menu's (with different implementations)
 * would be added to the waitress class, the waitress class would be full of ways to handle the different
 * implementations. It would be impossible to maintain.
 *
 * Be aware that the Java implementation uses different words for the methods in the Iterator.
 */
$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu        = new DinerMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);

$waitress->printMenu();
$waitress->printVegetarianMenu();

echo 'Customer asks, is the Hotdog vegetarian?' . PHP_EOL;
echo 'Waitress says: ' . PHP_EOL;
if ($waitress->isItemVegetarian('Hotdog')) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}

echo 'Customer asks, are the Waffles vegetarian?' . PHP_EOL;
echo 'Waitress says: ' . PHP_EOL;
if ($waitress->isItemVegetarian('Waffles')) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
