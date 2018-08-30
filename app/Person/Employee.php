<?php 

namespace PhpThis\Person;

use PhpThis\Person\Person;

class Employee extends Person {
  public function __construct() {
    parent::__construct();
    echo "This is Employee's __construct()\n";
  }
  
  public function __destruct() {
    parent::__destruct();
    echo "This is Employee's __destruct()\n";
  }

}
