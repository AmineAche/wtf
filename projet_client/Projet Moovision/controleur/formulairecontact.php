<?php
    session_start();

    if ($_SESSION['Connecté'] == true) {
        $_SESSION['prenomcontact'] = $_SESSION['prenom'];
        $_SESSION['nomcontact'] =$_SESSION['nom'];
        $_SESSION['mailcontact'] = $_SESSION['mail'];
        $_SESSION['telcontact'] = $_SESSION['telephone'];
        $_SESSION['messagecontact'] = $_POST['message'];
    } else {
        $_SESSION['prenomcontact'] = $_POST['prenom'];
        $_SESSION['nomcontact'] = $_POST['nom'];
        $_SESSION['mailcontact'] = $_POST['email'];
        $_SESSION['telcontact'] = $_POST['tel'];
        $_SESSION['messagecontact'] = $_POST['message'];
    }
    
    include '../Modele/formulairecontact.php';
    header($chemin);
    exit;
?>