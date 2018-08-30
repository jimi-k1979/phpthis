<?php
require_once('vendor/autoload.php');

//phpinfo();

// use PhpThis\Menu
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

use PhpThis\Person\Student;
$tmpStudent = new Student ("Mindi", "22");
echo "Name : " . $tmpStudent->name;
