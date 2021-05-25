<?php
    session_start();
    $_SESSION["erreur"] = null;
    
    if(empty($_POST['categories']) && empty($_GET['res'])) {
        $_SESSION['errer'] = "Vous n'avez rien rempli"; 
        header('Location: ../vue/html/choisir_coach.php');
        exit;
    } else {
        unset($_SESSION['erreur']);
        if (isset($_POST['categories'])) {
            $_SESSION['categories'] = $_POST['categories'];
        }
        $_SESSION['res'] = $_GET['res'];
        include '../modele/choisir_coach.php';
        global $chemin;
        header($chemin);
        exit;
    }
?>