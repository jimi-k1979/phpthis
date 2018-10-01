<?php
namespace PhpThis\Menu;

final class DinnerMenu extends LunchMenu implements DinnerPortionInterface, DinnerPricesInterface {
  
  static public $title = "Dinner Menu";
  
  public function setDinnerPortion($oMenuItem) {
    $adjustedServingSize = 1;
    $baseServingSize = $oMenuItem->getServingSize();
    
    // Make the dinner portion 50% biggerthan the lunch portion.
    $adjustedServingSize = $baseServingSize * 1.5;
    
    return $adjustedServingSize;
  }
  
  public function setDinnerPrices($oMenuItem) {
    $adjustedPrice = 1;
    $base_price = $oMenuItem->getPrice();
    
    // Make the dinner price 25% more then the lunch price.
    $adjustedPrice = $base_price * 1.25;
    
    return $adjustedPrice;
  }
}
