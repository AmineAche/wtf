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
    <link rel="stylesheet" href="../css/style.css">
    <link href="../bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;600&display=swap" rel="stylesheet">
</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo&family=Libre+Baskerville&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <!-- <a class="navbar-brand" href=""><img src="../image/fitech.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500;600&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;600&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Cairo&family=Libre+Baskerville&display=swap');
        </style>

    <a href="./echanger_avec_adherent.php" class='ins'>Echanger avec les adhérents</a>
    <a href="./progres.php" class='ins'>Progrès</a>
    <a href="./reserver_entrainement.php" class='ins'>Reserver un entrainement</a>
    <a href="../../controleur/coach.php" class='ins'>Choisir un coach</a>
    <a href="./entrainement_maison.php" class='ins'>Entrainement maison</a><br>
    <a href="../../controleur/modifier_profil.php" class='ins'>Modifier profil</a>
    <a href="./note_coach.php" class='ins'>Note coach</a><br><br>
    </nav>
    </header>
    <div id="bande"></div>
    <?php
        echo "<p>Bonjour ".$_SESSION['nom']." ".$_SESSION['prenom'].": ".$ta."</p>";
    ?>
        <button name="deco" value="oui" class='ins'><a href="../../controleur/deconnexion.php"><p>Déconnexion</p></button>
    <div id="imageAccueil">
    </div>


    <div id="bande"></div>
    <footer>

        <div id="copyright">
        <span> By Intech S2 ©2020</span>
        </div>
    </footer>
    <?php
        if (!empty($_POST['deco'])) {
            header('Location: ../../');
        } //elseif ($_POST['deco'] != "oui") {
        //     header('Location: http://localhost/Projets/BTT/vue/html/accueil_membre.php');
        
        // }
    ?>
</body>
</html>
