<!DOCTYPE html>
<?php
    //session_start();
    include '../../modele/echanger_avec_adherent.php';
    include '../../modele/database.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil messagerie</title>
        <link rel="stylesheet" href="../css/inscrire.css">
    </head>
    
    <body>
    <div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
        <h3>Adhérent</h3>

        <?php
            $users = index();
            echo ($users);
        ?>

        <h3> Groupe <h3>
        <?php
            $groupe = groupe();
            echo($groupe); 
        ?>


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