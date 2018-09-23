<?php
require_once('vendor/autoload.php');

use PhpThis\Person\User;

$user = new User();
$user->firstname = 'Jane';
$user->lastname = 'Doe';
$user->email = 'janedoe@email.com';
$user->address = 'My address 1111';

echo 'First Name: ' . $user->firstname . "\nLast Name: " . $user->lastname . 
     "\nEmail: " . $user->email . "\nAddress:" . $user->address . "\n";

