<?php
namespace PhpThis;

class CountInstanceOfMyself {
  public static $instances = 0;
  public function __construct() {
    CountInstanceOfMyself::$instances++;
  }
  public function __destruct() {
    CountInstanceOfMyself::$instances--;
  }
}
