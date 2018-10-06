<?php
namespace PhpThis\Menu;

class MenuItem {
  // this is considered bad form now - difficult to run unit tests on
  
  // constructor (not implemented)
  public function __construct(){}
  
  // set undeclared property
  public function __set($property, $value) {
    $this->$property = $value;
  }
  
  // get defined property
  public function __get($property) {
    if (isset($this->$proprty)) {
      $this->$property;
    }
  }
}
