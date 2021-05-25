<!DOCTYPE html>
  <?php
       session_start();
       unset($_SESSION);
       unset($_POST);
  ?>
<html>    
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="./vue/css/style.css">
  <link href="./vue/bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">
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
      <a class="navbar-brand" href=""><img src="./vue/image/fitech.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo&family=Libre+Baskerville&display=swap');
      </style>

      <a href="./vue/html/inscrire.php" class='ins'>Inscription</a>
      <a href="./vue/html/abonnement.html" class='ins'>Abonnement</a>
      <a href="./vue/html/connexion.php" class='ins'>Connexion</a>
      <a href="./vue/html/connexion_coach.php" class='ins'>Espace Coach</a>
      <a href="#" class='ins'>Nous contacter</a>

    </nav>
  </header>
  <div id="bande"></div>
  
  <div id="imageAccueil">
    <h1>Le Club</h1>
    <button> <a href="vue/html/decouvrir.html"><p>Découvrir ></p></a></button>

  </div>


  <div id="bande"></div>
  <footer>

    <div id="copyright">
      <span> By Intech S2 ©2020</span>
    </div>
  </footer>
</body>

</html>
