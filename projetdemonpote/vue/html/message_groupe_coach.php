<!DOCTYPE html>
<?php
    include '../../controleur/message_groupe_coach.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Messagerie</title>
    </head>
    
    <body>
        <?php
            if(isset($_POST['groupe'])) {
            $_SESSION['groupe'] = $_POST['groupe'];
            $_SESSION['id_groupe'] = $_POST['id'];
            }

            echo"<h3>Conversation du groupe : ".$_SESSION['groupe']."</h3>";
            echo "<form action='ajouter_adherent.php' method='POST'><input type='submit' name='go' value='Ajouter un adherent'></form>";
            
            $message = afficher_message();
            for ($i=0; $i < count($message); $i++) {
                echo ($message[$i]);
            }
        ?>
        
        <form action="../../controleur/message_groupe_coach.php" method="POST">
            <textarea name="message" rows="8" cols="80"></textarea><p>
            <input type="submit" name="Envoyez" value="Envoyez">
        </form>

        <form action="message_groupe_coach.php" method="POST">
            <input type="submit" name="allez" value="Actualiser">
        </form>
    
    
        <a href="echanger_avec_adherent_coach.php">Retour</a>
    
    </body>
</html>