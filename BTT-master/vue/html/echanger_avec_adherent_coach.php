<!DOCTYPE html>
<?php
    //session_start();
    include '../../modele/echange_avec_adherent_coach.php';
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
        <h3>Adherent</h3>
        <?php
            $users = index();
            echo ($users);
        ?>

        <h3> Groupe <h3>
        <button><a href="./groupe.php" class='ins'>Créer un groupe</a></button><br>

        <?php
            $groupe = groupe();
            echo($groupe); 
        ?>

        <button><a href="../../controleur/retour_coach.php">Retour</a></button>
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