<!DOCTYPE html>
<?php
    session_start();
    if (empty($_SESSION['erreur'])) {
        $_SESSION['erreur'] = null;
    }
    if (empty($_SESSION['msg'])) {
        $_SESSION['msg'] = null;
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="../../controleur/progres.php" method="POST">    
        <input type="number" name="poid" value="" placeholder="Votre poid en kilogramme" min="30" max="180">kg<p><br>
        <!-- <input type="radio" name="objectif" value="maigrir">
        <label for="maigrir">maigrir</label>
        <input type="radio"name="objectif" value="prendre_du_poids">
        <label for="prendre_du_poids">Prendre du poids</label><p><br> -->
        <?php

            echo $_SESSION['msg']."<br><br>";
            echo $_SESSION['erreur']."<br><br>";
        ?>
        <button>Enregister</button><br>
    </form>
    <a href="../../controleur/retour.php">Retour</a>
    
</body>
</html>