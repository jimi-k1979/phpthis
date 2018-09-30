<?php
namespace PhpThis\GameMechanics;

class ScaryRoad {

  public function __construct() {
  }
  
  public function DriveCar(array $threateningObject) {
    // while driving down scary road
    
    foreach ($threateningObject as $oThreat) {
      $oThreat->beThreatening();
    }
  }
}
