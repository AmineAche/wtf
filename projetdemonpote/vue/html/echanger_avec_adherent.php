<!DOCTYPE html>
<?php
    //session_start();
    include '../../modele/echanger_avec_adherent.php';
    include '../../modele/database.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    
    <body>
        <h3>Adhérent</h3>

        <?php
            $users = index();
            echo ($users);
        ?>

        <h3> Groupe <h3>
        <?php
            $groupe = groupe();
            echo($groupe); 
        ?>


        <a href="../../controleur/retour.php">Retour</a>

    
    </body>
</html>