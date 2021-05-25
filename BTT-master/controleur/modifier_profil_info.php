<?php
    session_start();

    $_SESSION['user'][1] = $_POST['nom'];
    $_SESSION['user'][2] = $_POST['prenom'];
    $_SESSION['user'][3] = $_POST['adresse_mail'];
    $_SESSION['user'][4] = $_POST['ville'];
    $_SESSION['user'][5] = $_POST['date'];
    $_SESSION['user'][6] = $_POST['taille'];
    $_SESSION['user'][7] = $_POST['poids'];
    $_SESSION['user'][8] = $_POST['sexe'];
    
    if ($_POST['mdp'] != "****") {
        $_SESSION['user'][9] = $_POST['mdp'];
    }

    $_SESSION['obje'] = $_POST['objectif'];

    include '../modele/modifier_profil_info.php';
    header('Location: ../vue/html/accueil_membre.php');
    exit;
?>