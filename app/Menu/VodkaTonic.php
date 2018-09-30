<?php

namespace PhpThis\Menu;

use PhpThis\Menu\Beverage;

class VodkaTonic extends Beverage {
  public function stir() {
    echo "Stir method of the VodkaTonic Class called";
  }
  public function mix() {
    echo "Mix method of the VodkaTonic Class called";
  }
}
