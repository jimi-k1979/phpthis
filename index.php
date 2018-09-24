<?php
require_once('vendor/autoload.php');

use PhpThis\Person\Employee;

$e = new Employee();
$e->setFirstName("Marsha");
$e->setBirthDate("09-12-1983");

$data = serialize($e)."\n";
var_dump(unserialize($data));
