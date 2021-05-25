<?php
    session_start();
    $_SESSION["erreur"] = null;
    $key = "abonnement";
    $_SESSION['abo'] = $_POST['abonnement'];
    $valid = true;
	$info = array();
    
    if( isset($_POST[$key]) && trim($_POST[$key]) != '' )
	    {
	        $info[$key] = htmlspecialchars($_POST[$key]);
	    } else {
	        $info[$key] = '';
	        $valid = false;
        }  
        
        // Verifie qu'un abonnement à été choisi

        if( $valid == false ){
            $_SESSION['erreur'] = "Vous n'avez choisi aucun abonnement. Veuillez en choisir un.";
            header('Location: ../vue/html/choisir_un_abonnement.php');
            exit;
        } else {
            unset($_SESSION['erreur']);
            $_SESSION['abonnement'] = $_POST['abonnement'];
            include '../modele/choisir_un_abonnement.php';
            header('Location: ../index.php');
            exit;
            //$q = $bdd->query("UPDATE adherent SET statut = "" .$_POST['abonnement'] ."" WHERE iduser = " . $_SESSION["mail"])
        }

        // données enregistrer dans la bdd si oui sinon renvoie vers la page d'abonnement 
?>