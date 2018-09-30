<?php
namespace PhpThis\Menu;

class HappyHourMenu extends DrinkMenu implements HappyHourDrinkPrices {

  public function setHappyHourDrinkPrices($oDrink): float {
    $adjusted_price = 1;
    $base_price = $oDrink->getPrice();
    
    // Make the happy hour drink prices 30% less than regular price
    $adjusted_price = $base_price * 0.7;
    
    return $adjusted_price;
  }

}
