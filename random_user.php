<?php
require_once 'class/RandomUser.php';
$user = new RandomUser('?results=');
$multipleUser = $user->getMultipleUser(10);
// var_dump($multipleUser);
require 'index.php'
?>

<!-- <div class="container">
    <ul>
        <?php foreach($multipleUser as $users): ?>
        genre, prenom, nom, nationalité
        <li><?= $users['gender'] ?> <?= $users['firstName'] ?> <?= $users['lastName'] ?> <?= $users['nat'] ?></li>
        <?php endforeach ?>
    </ul>
</div> -->
<div class="container">
    <li>
        <button onclick="alert('<?php foreach($multipleUser as $users): ?> <?= $users['gender'] ?> <?= $users['firstName'] ?> <?= $users['lastName'] ?> <?= $users['nat'] ?> <?php endforeach ?>')">Call Random Users</button>
    </li>
</div>