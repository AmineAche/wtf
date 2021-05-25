<?php
	//session_start();
	include 'database.php';
	global $db;

	$q = $db->prepare("SELECT * FROM horaire_coach WHERE reserver = :reserver AND coach = :coach");
	$q->execute([
		'reserver' => $_SESSION['reservation'],
		'coach' => $_SESSION['num_coach']
	]);
	$result = $q->rowcount();

	if ($result == 0) {
		$q = $db->prepare("INSERT INTO horaire_coach(reserver,num_client,coach) VALUES (:reserver,:num_client,:coach)");
		$q->execute([
            'reserver' => $_SESSION['reservation'],
            'num_client' => $_SESSION['id_user'],
            'coach' => $_SESSION['num_coach']
            
		]);
		
        $_SESSION['erreur'] = "Votre séance a bien été enregistré";
	} else {
		$_SESSION['erreur'] = 'Vous avez déjà une séance à cette heure';
	}
?>