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
    <title>Progrès</title>
    <link rel="stylesheet" href="../css/inscrire.css">
</head>
<body>
<div class="main-w3layouts wrapper">
		<h1>Progrès</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
    <form action="../../controleur/progres.php" method="POST">    
        <p><input type="number" name="poid" value="" placeholder="Votre poid en kilogramme" min="30" max="180">kg<p><br>
        <!-- <input type="radio" name="objectif" value="maigrir">
        <label for="maigrir">maigrir</label>
        <input type="radio"name="objectif" value="prendre_du_poids">
        <label for="prendre_du_poids">Prendre du poids</label><p><br> -->
        <?php

            echo $_SESSION['msg']."<br><br>";
            echo $_SESSION['erreur']."<br><br>";
        ?>
        <input type="submit" name="go" value="Validez"><br>
    </form>
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