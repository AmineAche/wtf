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
    <link rel="stylesheet" href="../css/inscrire.css">
</head>
<body>
<div class="main-w3layouts wrapper">
<h1>Page de modification</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
    <table border='2'>
        Profil<br>
        <form action="../../controleur/modifier_profil_info.php" method="POST">
            <p>Nom: <input type="text" name="nom" value="<?php echo ($_SESSION['user'][1]);?>" required></p><br>
            <p>Prenom: <input type="text" name="prenom" value="<?php echo ($_SESSION['user'][2]);?>" required></p><br>
            <p>Adresse mail: <input type="text" name="adresse_mail" value="<?php echo ($_SESSION['user'][3]);?>" required></p><br>
            <p>Ville: <input type="text" name="ville" value="<?php echo ($_SESSION['user'][4]);?>" required></p><br>
            <p>Date de naissance: <input type="date" name="date" value="<?php echo ($_SESSION['user'][5]);?>" required></p><br>
            <p>Taille: <input type="number" name="taille" value="<?php echo ($_SESSION['user'][6]);?>" required></p><br>
            <p>Poids: <input type="number" name="poids" value="<?php echo ($_SESSION['user'][7]);?>" required></p><br>
            <p>Sexe:   <?php
                        if ($_SESSION['user'][8] == 'Homme') {
                            echo "<input type='radio' name='sexe' value='Homme' checked>
                                <label for='Homme'>Homme</label>
                                <input type='radio' name='sexe' value='Femme'>
                                <label for='Femme'>Femme</label><p><br>";
                        } else {
                            echo "<input type='radio' name='sexe' value='Homme'>
                                <label for='Homme'>Homme</label>
                                <input type='radio' name='sexe' value='Femme' checked>
                                <label for='Femme'>Femme</label><p><br>";
                        }
                    ?></p>
            <p>Mot de passe: <input type="password" name="mdp" value="****" required></p><br>
            <p>Objectif:<?php
                        if ($_SESSION['objectif'] == 'maigrir') {
                            echo "<input type='radio' name='objectif' value='maigrir' checked>
                                <label for='maigrir'>Maigrir</label>
                                <input type='radio' name='objectif' value='prendre_du_poids'>
                                <label for='prendre_du_poids'>Prendre du poids</label><p><br>";
                        } else {
                            echo "<input type='radio' name='objectif' value='maigrir'>
                                <label for='maigrir'>Maigrir</label>
                                <input type='radio' name='objectif' value='prendre_du_poids' checked>
                                <label for='prendre_du_poids'>Prendre du poids</label><p><br>";
                        }
                    ?></p><br>
                    <input type="submit" name="go" value="Modifier le profil"><br>
        </form>
    </table>
    <a href="../../controleur/retour.php"><p>Retour</p></a>
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
    
</body>
</html>