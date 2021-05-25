<!doctype html>
<?php
	include '../../controleur/affiche_horaire.php';
	global $ta;
	if (empty($_SESSION['erreur'])) {
        $_SESSION['erreur'] = null;
    }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Réserver ses séances</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>

<form action="../../controleur/reserver_entrainement.php" method="POST">
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
				echo "<li>".$ta[$i]['reserver']."</li>";
			}
		}
		echo"</ul>";
		 echo ($_SESSION['erreur']."<br><br>");
	}
	?>
	 <a href="../../controleur/retour.php">Retour</a>
</body>
</html>