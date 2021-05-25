<!DOCTYPE html>
<?php
    include '../../controleur/evolution.php';
    global $ta;
    unset($_SESSION['erreur']);
    unset($_SESSION['errer']);
    unset($_SESSION['error']);
    unset($_SESSION['msg']);
    unset($_SESSION['mot_de_passe']);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>accueil membre</title>
</head>
<body>
<?php
    echo "<h1>Bonjour ".$_SESSION['nom']." ".$_SESSION['prenom'].": ".$ta."<h1>";
?>
    <a href="./echanger_avec_adherent.php">Echanger avec les adhérents</a>
    <a href="./progres.php">Progrès</a>
    <a href="./reserver_entrainement.php">Reserver un entrainement</a>
    <a href="../../controleur/coach.php">Choisir un coach</a>
    <a href="./entrainement_maison.php">Entrainement maison</a>
    <a href="../../controleur/modifier_profil.php">Modifier profil</a>
    <a href="./note_coach.php">Note coach</a><br><br>
    <form action="../../" method="POST">
        <button name="deco" value="oui"><?php unset($_SESSION)?>Déconnexion</button>
    </form>
    <?php
        if (!empty($_POST['deco'])) {
            header('Location: ../../');
        } //elseif ($_POST['deco'] != "oui") {
        //     header('Location: http://localhost/Projets/BTT/vue/html/accueil_membre.php');
        
        // }
    ?>
</body>
</html>
