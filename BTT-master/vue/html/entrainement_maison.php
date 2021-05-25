<!DOCTYPE html>
<?php
    session_start();
    if (empty($_SESSION['erreur'])) {
        $_SESSION['erreur'] = null;
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Choisissez une catégorie</title>
    <link rel="stylesheet" href="../css/inscrire.css">
</head>
<body>
<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
    <form action="../../controleur/entrainement_maison.php" method="POST">
        <p>Type d'entrainement:</p> 
        <div>
            <p><input type="checkbox" id="full_body" name="1" value="full_body">
            <label for="full_body">Full body</label>
        </div>
        <div>
            <p><input type="checkbox" id="Abdos" name="2" value="abdos">
            <label for="Abdos">Abdos</label>
        </div>
        <div>
            <p><input type="checkbox" id="Dos" name="3" value="dos">
            <label for="Dos">Dos</label>
        </div>
        <div>
            <p><input type="checkbox" id="Jambes" name="4" value="jambes">
            <label for="Jambes">Jambes</label>
        </div>
        <div>
            <p><input type="checkbox" id="Bras" name="5" value="bras">
            <label for="Bras">Bras</label>
        </div>
        <div>
            <p><input type="checkbox" id="Pecs" name="6" value="pecs">
            <label for="Pecs">Pecs</label>
        </div>
        <div>
            <p><input type="checkbox" id="Epaules" name="7" value="epaules">
            <label for="Epaules">Epaules</label>
        </div>
        <?php
            echo $_SESSION['erreur']."<br><br>";
        ?>

        <p><button>Valider</button>
    
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