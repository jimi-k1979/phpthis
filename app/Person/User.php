<?php
namespace PhpThis\Person;

class User {
  private $firstname = 'John';
  private $lastname = 'Doe';
  private $email = 'johndoe@domain.com';
  
  public function __construct() {
    // not implemented
  }
  
  public function setFirstName($firstname) {
    $this->firstname = $firstname;
  }
  
  public function getFirstName() {
    return $this->firstname;
  }
  
  public function setLastName($lastname) {
    $this->lastname = $lastname;
  }
  
  public function getLastName() {
    return $this->lastname;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
  
  public function getEmail() {
    return $this->email;
  }
}
