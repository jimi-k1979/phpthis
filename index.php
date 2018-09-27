<?php
require_once('vendor/autoload.php');

class CopyClass {
  public $name;
}

$first = new CopyClass;
$first->name = "Number 1";
$second = clone $first;
echo "first = " . $first->name . "\n\n";

$second->name = "Number 2";

echo "first = " . $first->name . "\n";
echo "second = " . $second->name . "\n";
