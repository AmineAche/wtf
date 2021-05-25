<!DOCTYPE html>
<?php
    //session_start();
    include '../../modele/echange_coach.php';
    include '../../modele/database.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    
    <body>
        <h3>Coach</h3>
        <?php
            $users = index();
            echo ($users);
        ?>


        <a href="../../controleur/retour_coach.php">Retour</a>

    
    </body>
</html>