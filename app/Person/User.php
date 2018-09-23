<?php
namespace PhpThis\Person;

class User {
  
  public function __construct() {
    // not implemented
  }
  
  function __set($property, $value) {
    $this->$property = $value;
  }
  
  function __get($property) {
    if (isset($this->$property)) {
      return $this->$property;
    }
  }
}

