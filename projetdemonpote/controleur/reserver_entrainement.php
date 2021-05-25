<?php
	session_start();
	$heure = date('H:i:s', time()+ (1*3600));
	$today = date('m/d/Y');
	if ($_POST['jour'] == $today) {
		if ($_POST["heure"] > $heure) {
			$_SESSION['erreur'] = "Votre réservation a bien été pris en compte pour le ".$today." à ".$_POST['heure'];
			$day = explode("/",$_POST['jour']);
			$array = array($day[2], $day[0], $day[1]);
			$day = implode("-",$array);
			$_SESSION['reservation'] = $day." ".$_POST["heure"];
			include '../modele/reserver_entrainement.php';
			// echo ($_SESSION['reservation']);
		} else {
			$_SESSION['erreur'] = "Cet horaire n'est plus valide";
		}
	} else if ($_POST['jour'] > $today) {
		$_SESSION['erreur'] = "Votre réservation a bien été pris en compte pour ".$_POST['jour']." à ".$_POST['heure'];
		$day = explode("/",$_POST['jour']);
		$array = array($day[2], $day[0], $day[1]);
		$day = implode("-",$array);
		$_SESSION['reservation'] = $day." ".$_POST["heure"];
		include '../modele/reserver_entrainement.php';
	} else {
		$_SESSION['erreur'] = "Ces créneaux sont déjà dépassé";
	}
	header('Location: ../vue/html/reserver_entrainement.php');
?>