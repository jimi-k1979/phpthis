<?php
namespace PhpThis\Test;

class CallTest {
  private $v = [1, 7, 9];
  
  public function __call($method, $args) {
    echo "The method \"$method\" was called.\n";
    var_dump($args);
    return $this->v;
  }
}
