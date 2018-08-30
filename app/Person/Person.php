<?php

namespace PhpThis\Person;

class Person {
  protected $name;
  private $gender;
  private $haircolour;
  private $eyecolour;
  
  public function setName($name) {
    $this->name = $name;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function setGender($gender) {
    $this->gender = $gender;
  }
  
  public function getGender() {
    return $this->gender;
  }
  
  public function setEyecolour($eyecolour) {
    $this->eyecolour = $eyecolour;
  }
  
  public function getEyecolour() {
    return $this->eyecolour;
  }
  
  public function setHaircolour($haircolour) {
    $this->haircolour = $haircolour;
  }
  
  public function getHaircolour() {
    return $this->haircolour;
  }
  
  public function __construct() {
    echo "This is Person's __construct()\n";
  }
  
  public function __destruct() {
    echo "This is Person's __destruct()\n";
  }
}
