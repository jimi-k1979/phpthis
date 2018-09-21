<?php
require_once('vendor/autoload.php');

use PhpThis\Person\User;

$user = new User();
$user->setFirstName('John');
$user->setLastName('Doe');
$user->setEmail('john@email.com');

echo 'First Name: ' . $user->getFirstName() . "\nLast Name: " . $user->getLastName() . "\nEmail: " . $user->getEmail() . "\n";

