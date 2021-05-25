<!DOCTYPE html>
    <?php
        include '../../modele/ajouter_adherent.php';
        include '../../modele/database.php';

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
        <title>Ajouter</title>
        <link rel="stylesheet" href="../css/inscrire.css">
    </head>
    
    <body>
                  
        <h3> Ajouter particiant au groupe <?php echo $_SESSION['groupe'] ?> </h3>                 
        <form action='../../controleur/ajouter_adherent.php' method='POST'>                
            <?php
                $g = index();
                echo ($g);
                //echo $_SESSION['num_coach'];
            ?>
            <input type="submit" name="g" value="Ajouter">
        </form>
        <br>
        <a href="./accueil_coach.php"><p>Retour Accueil</p></a>
    </body>
</html>