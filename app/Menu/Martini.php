<?php

namespace PhpThis\Menu;

use PhpThis\Menu\Beverage;

class Martini extends Beverage {
  public function stir() {
    echo "Stir method of the Martini Class called";
  }
  public function mix() {
    echo "Mix method of the Martini Class called";
  }
}
