<!DOCTYPE html>
    <?php
        if (empty($_SESSION['erreur'])) {
            $_SESSION['erreur'] = null;
        }
        if(isset($_POST['go'])) {
            $_SESSION['erreur'] = null;
        }
    ?>
    <html>
    
    <head>
        <meta charset="UTF-8">
        <title>groupe</title>
        <link rel="stylesheet" href="../css/inscrire.css">
    </head>
    
    <body>
        <h3> Créer un groupe </h3>
        <form action="../../controleur/groupe.php" method="POST">
            Nom du groupe : <input type="text" name="groupe" value=""><p>
        <input type="submit" name="go" value="Créer">
        </form>
        <br>
        <a href="/accueil_coach.php"><p>Retour Accueil</p></a>
    </body>
</html>