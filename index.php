<?php
require_once('vendor/autoload.php');

use PhpThis\Test\CallTest;

$example = new CallTest();
$a = $example->test('f', 'o', 'o');
var_dump($a);
