<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        extract($_SESSION);
        echo "Hello ".$nom." ".$prenom;
    ?>
    <a href="./echanger_avec_adherent_coach.php">Messagerie Avec Les Adhérent</a>
    <a href="./echange_coach.php">Messagerie entre coach</a>
    <a href="../../controleur/deconnexion_coach.php">Déconnexion</a>
</body>
</html>
