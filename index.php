<?php
require_once('vendor/autoload.php');

//phpinfo();

// first bit
//use PhpThis\Person\Person;
//
//$Mindi = new Person();
//$Billy = new Person();
//
//$Mindi->setName('Mindi');
//$Mindi->setGender('female');
//$Mindi->setHaircolour('light brown');
//$Mindi->setEyecolour('blue');
//
//$Billy->setName('Billy');
//$Billy->setGender('male');
//$Billy->setHaircolour('brown');
//$Billy->setEyecolour('brown');
//
//var_dump($Mindi);
//var_dump($Billy);

// access modifiers
use PhpThis\Person\Student;
//$tmpStudent = new Student ("Mindi", "22");
//echo "Name : " . $tmpStudent->name; // causes an error

// inheritance pt 1
$tmpStudent = new Student();
$tmpStudent->setName("Mindi");
$tmpStudent->name = "Mindi"; // causes an error - $name is protected, not public

