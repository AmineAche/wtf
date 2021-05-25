<!DOCTYPE html>
<?php
    session_start();

    if (empty($_SESSION['errer'])) {
        $_SESSION['errer'] = null;
    }
    if(isset($_POST['go'])) {
        $_SESSION['errer'] = null;
    }
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
    </head>
    <body>
        <h3> Vos Identifiants  </h3>
    
        <form action="../../controleur/connexion_coach.php" method="POST">
            Nom : <input type="text" name="nom" value=""><p>
            Mot de passe : <input type="password" name="mot_de_passe" value=""><p>
            <?php 
              
            echo ($_SESSION['errer']."<br><br>");
                
            ?>

            <input type="submit" name="go" value="Entrer"><br>
            <a href="../../">Retour</a>

        </form>
    </body>
</html>
