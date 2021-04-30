<?php
require_once 'class/RandomUser.php';
$user = new RandomUser('?results=');
$multipleUser = $user->getMultipleUser(10);
// var_dump($multipleUser);
require 'index.php'
?>




