<?php

namespace PhpThis\Person;

class Student {
  private $name;
  public $age;
  
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}
