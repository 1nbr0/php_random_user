<html lang='fr'>
    <head>
        <meta charset="utf-8️">
        <link rel="stylesheet" href="element/style.css">
        <title>PHP Random User</title>
    </head>
<body>
    <div>
        <h1>Ma page PHP pour random user</h1>
    </div>
    <h2>Call API with this Button</h2>

    <button id="btnPopin" class="btnPopin">Display 10 Random Users</button>

    <div id="overlay" class="overlay">
        <div id="popin" class="popin">
            <h2>Here is 10 random users :<span id="btnClose" class="btnClose">&times;</span></h2>
            <ul>
                <!-- Je boucle sur le nombre de multipleUser créée afin de les afficher sous forme de liste dans ma popin -->
                <?php foreach($multipleUser as $users): ?> <!-- je démarre ma boucle -->
                <!-- genre, nom complet, nationalité -->
                <li>Gender : <?= $users['gender'] ?>, Name : <?= $users['firstName'] ?> <?= $users['lastName'] ?>, Nationality : <?= $users['nat'] ?></li><br/>
                <?php endforeach ?> <!-- je mets fin à ma boucle -->
            </ul>
            

            <!-- Le bouton "voir plus" permet d'afficher 10 utilisateurs suplémentaire.
                Cependant, je n'arrive pas à créer une fonction php dans RandomUser.php
                permettant de retourner 10 nouveaux utilisateurs -->
            <button id="btnPopinMore" class="btnPopinMore">Voir plus</button>

            <div id="popinMore" class="popinMore">
                <ul>
                    <?php foreach($multipleUser as $users): ?>
                    <!-- genre, nom complet, nationalité -->
                    <li>Gender : <?= $users['gender'] ?>, Name : <?= $users['firstName'] ?> <?= $users['lastName'] ?>, Nationality : <?= $users['nat'] ?></li><br/>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <script src="element/script.js"></script>
</body>
</html>