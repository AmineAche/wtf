<!doctype html>
    <?php
        session_start();  
    ?>
    <head>
        <meta type="content" charset="utf-8" />
        <title>Page d'inscription</title>
        <link rel="stylesheet" href="../css/inscrire.css">
    </head>

    <body>
	    <?php
            
            if (empty($_SESSION['erreur'])) {
                    $_SESSION['erreur'] = null;
                }
            if (empty($_SESSION['error'])) {
                $_SESSION['error'] = null;
            }
            if (empty($_SESSION['erreurdate'])) {
                $_SESSION['erreurdate'] = null;
            }
            if (empty($_SESSION['erreurmail'])) {
                $_SESSION['erreurmail'] = null;
            }
        ?>
    <!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>FITECH inscription</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">

				<form action="../../controleur/inscrire.php" method="post">
                    <input type="text" name="nom" value="" placeholder="Votre nom"><p><br>
                    <input type="text" name="prenom" value="" placeholder="Votre prénom"><p><br>
                    <input type="text" name="mail" value="" placeholder="Votre mail"><p><br>
                    <?php
                    echo ($_SESSION['erreurmail']."<br><br>");
                    ?>
                    <input type="text" name="ville" value="" placeholder="Votre ville"><p><br>
                    <input type="date" name="date" value="" placeholder="Date"><p><br>
                    <?php
                    echo ($_SESSION['erreurdate']."<br><br>");
                    ?>

                    <input type="number" name="taille" value="" placeholder="Votre taille en centimetre" min="100" max="220">cm<p><br>
                    <input type="number" name="poid" value="" placeholder="Votre poid en kilogramme" min="30" max="180">kg<p><br>
                    <input type="radio" name="objectif" value="maigrir">
                    <label for="maigrir">maigrir</label>
                    <input type="radio"name="objectif" value="prendre_du_poids">
                    <label for="prendre_du_poids">Prendre du poids</label><p><br>

                    <input type="radio" name="sexe" value="Homme">
                    <label for="Homme">Homme</label>
                    <input type="radio"name="sexe" value="Femme">
                    <label for="Femme">Femme</label><p><br>
                    <input type="password" name="mot_de_passe" value="" placeholder="Votre Mot de passe"><p><br>
                    <input type="password" name="cmot_de_passe" value="" placeholder="Confirmez votre Mot de passe"><p><br>
                    
                    <?php 
                        echo ($_SESSION['error']."<br><br>");
                        echo ($_SESSION['erreur']."<br><br>");
                    ?>
                    <input type="submit" name="go" value="S'inscrire">
				</form>
                <a href="../../" class='ins'>Accueil</a>
				
			</div>
		</div>
        
        <div class="colorlibcopy-agile">
			<p>© 2020 By INTECH</p>
		</div>
        <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
    <!-- //main -->
    </body>
</html>