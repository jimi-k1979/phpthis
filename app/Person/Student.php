<?php

namespace PhpThis\Person;

use PhpThis\Person\Person;

class Student extends Person {
  public function setName($name) {
    $this->name = $name;
  }
}
