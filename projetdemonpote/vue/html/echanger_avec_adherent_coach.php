<!DOCTYPE html>
<?php
    //session_start();
    include '../../modele/echange_avec_adherent_coach.php';
    include '../../modele/database.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    
    <body>
        <h3>Adherent</h3>
        <?php
            $users = index();
            echo ($users);
        ?>

        <h3> Groupe <h3>
        <a href="./groupe.php">Créer un groupe</a><br>

        <?php
            $groupe = groupe();
            echo($groupe); 
        ?>

        <a href="../../controleur/retour_coach.php">Retour</a>

    
    </body>
</html>