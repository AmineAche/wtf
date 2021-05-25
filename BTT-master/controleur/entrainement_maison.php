<?php
    session_start();
    $_SESSION['erreur'] = null;

    if (empty($_POST[1]) && empty($_POST[2]) && empty($_POST[3]) && empty($_POST[4]) && empty($_POST[5]) && empty($_POST[6]) && empty($_POST[7])) {
        $_SESSION["erreur"] = "Vous n'avez rien sélectionner.";
        header('Location: ../vue/html/entrainement_maison.php');
    } else {

        foreach($_POST as $key => $val) {
            // $i++;
            $ta[$key] = $val;
        }   

        $_SESSION['tab'] = $ta;

        include '../../BTT/Modele/entrainement_maison.php';
        global $chemin;
        header($chemin);
        exit;
    }
?>