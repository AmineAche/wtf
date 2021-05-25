<!DOCTYPE html>
<?php
    include '../../controleur/message_coach.php';
    include '../../modele/database.php'; 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Messagerie</title>
    </head>
    
    <body>
    <?php   
        echo "Coach: ". $_SESSION['coach'] ." (".$_SESSION['presence'].")</br>";

            if(isset($_POST['go'])) {
                $nom = explode( ' ', $_POST['go']);
                $_SESSION['corres'] = $_POST['go'];
                $_SESSION['m.corres'] = $_POST['mail'];
                }
                
                $message = afficher_message();
                for ($i=0; $i < count($message); $i++) {
                    echo ($message[$i]);
                }
        ?>   
        
       
        <form action="../../controleur/message_coach.php" method="POST">
            <textarea name="message" rows="8" cols="80"></textarea><p>
            <input type="submit" name="Envoyez" value="Envoyez">
        </form>

        <form action="message_coach.php" method="POST">
            <input type="submit" name="allez" value="Actualiser">
        </form>
    
      
            <a href='../../controleur/choisir_coach.php?res=oui'>Résilier</a>
            <a href="../../controleur/retour.php">Retour</a>
    </body>
</html>