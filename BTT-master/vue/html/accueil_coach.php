<!DOCTYPE html>
<?php
    session_start();
    extract($_SESSION);
    unset($_SESSION['erreur']);
?>
<head>
    <meta charset="UTF-8">
    <title>Accueil coach</title>
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
        <a class="navbar-brand" href=""><img src="../image/fitech.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500;600&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;600&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Cairo&family=Libre+Baskerville&display=swap');
        </style>

        <a href="./echanger_avec_adherent_coach.php" class='ins'>Messagerie Avec Les Adhérent</a>
        <a href="./echange_coach.php" class='ins'>Messagerie entre coach</a>
        <a href="../../controleur/deconnexion_coach.php" class='ins'>Déconnexion</a>
        </nav>
    </header>
    <div id="bande"></div>
    <?php
        echo "<p>Hello ".$nom." ".$prenom."</p>";
    ?>
    <div id="imageAccueil">
    </div>


    <div id="bande"></div>
    <footer>

        <div id="copyright">
        <span> By Intech S2 ©2020</span>
        </div>
    </footer>
</body>
</body>
</html>
