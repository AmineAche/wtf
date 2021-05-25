<!DOCTYPE html>
<?php
    session_start();

    if (empty($_SESSION['errer'])) {
        $_SESSION['errer'] = null;
    }
    if(isset($_POST['go'])) {
        $_SESSION['errer'] = null;
    }
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="stylesheet" href="../css/inscrire.css">
    </head>
    <body>
    <div class="main-w3layouts wrapper">
		<h1>Connexion coach</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
    
        <form action="../../controleur/connexion_coach.php" method="POST">
            <p>Nom : <input type="text" name="nom" value=""></p>
            <p>Mot de passe : <input type="password" name="mot_de_passe" value=""></p>
            <?php 
              
            echo ($_SESSION['errer']."<br><br>");
                
            ?>

            <input type="submit" name="go" value="Entrer"><br>
        </form>
            <a href="../../" class='ins'><p>Retour</p></a>
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

        </form>
    </body>
</html>
