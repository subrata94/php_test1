<?php
use model\User;

$user = new User();
$user->setFirstname("Subrata");
$user->setLastname("Debnath");
$user->setMobile("9804904308");
$user->setAddress("Airport");


echo $user->getFirstname();
echo "\n".$user->getLastname();
echo "\n".$user->getMobile();
echo "\n".$user->getAddress()."\n";