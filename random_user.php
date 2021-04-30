<?php
require_once 'class/RandomUser.php';
$user = new RandomUser('?results=');
$multipleUser = $user->getMultipleUser(10);
require 'index.php'
?>

<div class="container">
    <ul>
        <li></li>
    </ul>
</div>