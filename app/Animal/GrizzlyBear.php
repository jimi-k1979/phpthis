<?php
namespace PhpThis\Animal;

use \PhpThis\GameMechanics\ThreatInterface;

class GrizzlyBear extends Animal implements ThreatInterface {
  public function growlAtYou() {}
  public function chaseYou() {}
  public function pounceOnYourCar() {}
  public function eatYou() {}
  
  public function beThreatening() {
    $this->growlAtYou();
    $this->chaseYou();
    $this->pounceOnYourCar();    
  }
}
