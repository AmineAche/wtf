<!DOCTYPE html>
<?php
    include '../../controleur/message_coach_adherent.php';
    include '../../controleur/affiche_horaire_coach.php';
    global $ta;
    if (empty($_SESSION['erreur'])) {
        $_SESSION['erreur'] = null;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Messagerie</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        </script>
        <link rel="stylesheet" href="../css/inscrire.css">
    </head>
    
    <body>
    <div class="main-w3layouts wrapper">

	
        <?php
            if(isset($_POST['go'])) {
            $nom = explode( ' ', $_POST['go']);
            $_SESSION['corres'] = $_POST['go'];
            $_SESSION['id_corres'] = $_POST['id'];
            }

            echo"<h1>Conversation avec : ".$_SESSION['corres']."</h1>";
            echo"<div class='main-agileinfo'>
			<div class='agileits-top'>";
            
            $message = afficher_message();
            for ($i=0; $i < count($message); $i++) {
                echo ($message[$i]);
            }
        ?>
        
        <form action="../../controleur/message_coach_adherent.php" method="POST">
            <textarea name="message" rows="8" cols="80"></textarea><p>
            <input type="submit" name="Envoyez" value="Envoyez">
        </form>

        <form action="message_coach_adherent.php" method="POST">
            <input type="submit" name="allez" value="Actualiser">
        </form>
        
        <form action="../../controleur/reserver_entrainement_coach.php" method="POST">
            <p>Date: <input type="text" id="datepicker" name="jour"></p>
            <button name="heure" value="10:00:00">10h00</button>
            <button name="heure" value="11:00:00">11h00</button>
            <button name="heure" value="12:00:00">12h00</button>
            <button name="heure" value="13:00:00">13h00</button>
            <button name="heure" value="14:00:00">14h00</button>
            <button name="heure" value="15:00:00">15h00</button>
            <button name="heure" value="16:00:00">16h00</button>
            <button name="heure" value="17:00:00">17h00</button>
            <button name="heure" value="18:00:00">18h00</button>
            <button name="heure" value="19:00:00">19h00</button>
            <button name="heure" value="20:00:00">20h00</button>
        </form>
            <?php
                if (isset($ta)) {
                    echo "<ul>";
                    for($i=0; $i<count($ta); $i++) {
                        if ($ta[$i]['reserver'] != null) {
                            echo "<li><p>".$ta[$i]['nom']." ".$ta[$i]['prenom'].": ".$ta[$i]['reserver']."</p></li>";
                        }
                    }
                    echo"</ul>";
                    echo ($_SESSION['erreur']."<br><br>");
                }
            ?>
    
        <a href="../../controleur/retour_coach.php"><p>Retour</p></a>
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