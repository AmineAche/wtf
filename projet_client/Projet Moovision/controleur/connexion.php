<?php
    session_start();
    $_SESSION["erreur"] = null;
    $_SESSION["mail"] = $_POST['mail'];
    $_SESSION['mot_de_passe'] = $_POST['mot_de_passe'];
    $valid = true;
    $info = array();
          
    foreach( array('mail', 'mot_de_passe') as $key ) {
        if( isset($_POST[$key]) && trim($_POST[$key]) != '' )
            {
                $info[$key] = htmlspecialchars($_POST[$key]);
            } else {
                $erreur .= $key." ";
                $valid = false;
            } 
    }

    if ( $valid == false ) {
        if (empty($_POST['mail']) || empty($_POST['mot_de_passe'])) {
            $_SESSION["erreur"] = "Tout les champs ne sont pas remplis";
            header('Location: ../vue/html/connexion.php');
            exit;
        }
    } else {
        include '../Modele/Connexion.php';
        global $chemin;
        header($chemin);
    }
?>