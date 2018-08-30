<?php
require_once('vendor/autoload.php');

// Method Overriding
use PhpThis\Menu\Martini;
use PhpThis\Menu\VodkaTonic;

$m = new Martini();
$vt = new VodkaTonic();

$m->stir();
echo "\n";
$vt->stir();
echo "\n";

