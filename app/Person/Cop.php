<?php
namespace PhpThis\Person;

use \PhpThis\GameMechanics\ThreatInterface;

class Cop extends Person {
  public function followYou() {}
  public function pullYouOver() {}
  public function arrestYou() {}
  public function beatYouSenseless() {}
  
  public function beThreatening() {
    $this->followYou();
    $this->pullYouOver();
    $this->arrestYou();
  }
}
