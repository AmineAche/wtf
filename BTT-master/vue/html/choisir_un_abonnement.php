<!DOCTYPE html>
<?php
    session_start();
    if (empty($_SESSION['erreur'])) {
        $_SESSION['erreur'] = null;
    }
?>
<link rel="stylesheet" href="../css/inscrire.css">
<html>
    <head>
        <title>Page d'abonnement</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#">
    </head>
    <body>
    <div class="main-w3layouts wrapper">
		<h1>FITECH inscription</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
    <table border="2">
        <tr>
            <td>
                <h1>Choisissez votre abonnement</h1>
                <?php
                    echo ($_SESSION['erreur']);
                ?>
                <form action="../../controleur/choisir_un_abonnement.php" method="POST">

                    <input type="radio" id="AbonnementChoix1"name="abonnement" value="1">
                    <label for="AbonnementChoix1" checked>Abonnement Classique</label><br>

                    <input type="radio" id="AbonnementChoix2"name="abonnement" value="2">
                    <label for="AbonnementChoix2">Abonnement Rupture</label><br>

                    <input type="radio" id="AbonnementChoix3"name="abonnement" value="3">
                    <label for="AbonnementChoix3">Abonnement Strong</label>
                <div class="p">
                    <input type="submit" name="go" value="Valider">
                </div>
                </form>
            </td>
        </tr>
    </table>
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