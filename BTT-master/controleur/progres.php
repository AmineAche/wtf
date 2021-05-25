<?php
    session_start();

    if(empty($_POST['taille']) && empty($_POST['poid'])) {
        $_SESSION['erreur'] = "Tous les champs n'ont pas été remplis";
        header('Location: ../vue/html/progres.php');
        exit;
    } else {
        unset($_SESSION['erreur']);
        $_SESSION['poid'] = $_POST['poid'];
        $_SESSION['objectif'];

        include '../modele/progres.php';
        header('Location: ../vue/html/progres.php');
    exit;
    }   
?>