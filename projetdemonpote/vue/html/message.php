<!DOCTYPE html>
<?php
    include '../../controleur/message.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Messagerie</title>
    </head>
    
    <body>
        <?php
            if(isset($_POST['go'])) {
            $nom = explode( ' ', $_POST['go']);
            $_SESSION['corres'] = $_POST['go'];
            $_SESSION['m.corres'] = $_POST['mail'];
            }

            echo"<h3>Conversation avec : ".$_SESSION['corres']."</h3>";
            
            $message = afficher_message();
            for ($i=0; $i < count($message); $i++) {
                echo ($message[$i]);
            }
        ?>
        
        <form action="../../controleur/message.php" method="POST">
            <textarea name="message" rows="8" cols="80"></textarea><p>
            <input type="submit" name="Envoyez" value="Envoyez">
        </form>

        <form action="message.php" method="POST">
            <input type="submit" name="allez" value="Actualiser">
        </form>
    
    
        <a href="../../controleur/retour.php">Retour</a>
    
    </body>
</html>