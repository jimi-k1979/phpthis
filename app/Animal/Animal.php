<?php
namespace PhpThis\Animal;

class Animal {
  public function __construct() {
    $this->created = time();
    $this->logfile_handle = fopen('log.txt', 'w');
  }
  
  public function __destruct() {
    fclose($this->logfile_handle);
  }
}
