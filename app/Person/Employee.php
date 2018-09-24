<?php 

namespace PhpThis\Person;

use PhpThis\Person\Person;

class Employee extends Person {
  private $fname;
  private $date_of_birth;
  
  public function __construct() {
    parent::__construct();
    echo "This is Employee's __construct()\n";
  }
  
  public function __destruct() {
    parent::__destruct();
    echo "This is Employee's __destruct()\n";
  }
  
  public function setFirstName($fname) {
    $this->fname = $fname;
  }
  
  public function getFirstName() {
    return $this->fname;
  }
  
  public function setBirthDate($dob) {
    $this->date_of_birth = $dob;
  }
  
  public function getBirthDate() {
    return $this->date_of_birth;
  }
  
  public function __sleep() {
    return array("fname"); // because of this, only name is serialized
  }
}
