<?php

namespace PhpThis\Person;

class Person {
  private $name;
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
    
  }
}
