<?php
require_once('vendor/autoload.php');

use PhpThis\Animal\Cow;

$milky = new Cow();
echo $milky->created;
