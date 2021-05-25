<?php
	session_start();
	include 'database.php';
	global $db;

	$q = $db->prepare("SELECT * FROM horaire WHERE reserver = :reserver AND num_client = :num_client");
	$q->execute([
		'reserver' => $_SESSION['reservation'],
		'num_client' => $_SESSION['num_client']
	]);
	$result = $q->rowcount();

	if ($result == 0) {
		$q = $db->prepare("INSERT INTO horaire(reserver,num_client) VALUES (:reserver,:num_client)");
		$q->execute([
			'reserver' => $_SESSION['reservation'],
			'num_client' => $_SESSION['num_client']
		]);
	} else {
		$_SESSION['erreur'] = 'Vous avez déjà reservé pour cette heure';
	}
?>