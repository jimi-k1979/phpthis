<?php
require_once('vendor/autoload.php');

use \PhpThis\Menu\MenuItem;
use \PhpThis\Menu\LunchMenu;
use \PhpThis\Menu\DinnerMenu;

// Test
// Create Test Menu Item object
$tmpMenuItem = new MenuItem;
$tmpMenuItem->setItemName('Atlantic Yellow Fin Tuna');
$tmpMenuItem->setPrice(14.75);

echo LunchMenu::$title . "\n";
echo $tmpMenuItem->getItemName() . ' - £' . $tmpMenuItem->getPrice() . "\n\n";

// use the setDinnerPrice method we implemented in the DinnerMenu
// class that was declared in the DinnerPricesInterface
$tmpDinnerMenu = new DinnerMenu;
echo DinnerMenu::$title . "\n";
echo $tmpMenuItem->getItemName() . ' - £' . $tmpDinnerMenu->setDinnerPrices($tmpMenuItem) . "\n\n";

// change the Title by chnging the static $titlte variable in the DinnerMenu class.
DinnerMenu::$title = "Dinner";
echo DinnerMenu::$title . "\n";
echo $tmpMenuItem->getItemName() . ' - £' . $tmpDinnerMenu->setDinnerPrices($tmpMenuItem) . "\n\n";

