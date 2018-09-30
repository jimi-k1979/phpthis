<?php
require_once('vendor/autoload.php');

use PhpThis\GameMechanics\ScaryRoad;
use PhpThis\Person\Cop;
use PhpThis\Animal\GrizzlyBear;

$cop1 = new Cop;
$grizzly1 = new GrizzlyBear;
$grizzly2 = new GrizzlyBear;

$road = new ScaryRoad;
$road->DriveCar($threats = [$cop1, $grizzly1, $grizzly2]);
