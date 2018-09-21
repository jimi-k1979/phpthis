<?php
namespace PhpThis\Animal;

class Animal {
  public function __construct() {
    $this->created = time();
    $this->logfile_handle = fopen('log.txt', 'w');
  }
}
