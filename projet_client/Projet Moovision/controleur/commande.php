<?php
        session_start();
        
        if(isset($_POST['button'])){
            $_SESSION['erreurprix'] = null;
            $_SESSION['erreur_commande'] = null;
            $erreur = NULL;
            $valid = true;
         
        foreach( array('total', 'quantite') as $key ) {
            if( trim($_POST[$key]) != '') {
                $info[$key] = htmlspecialchars($_POST[$key]);
            } else {
                $erreur .= $key." ";
                $valid = false;
            } 
        }

        if( $valid == false ){
            $_SESSION["erreurprix"] = "Vous n'avez rien dans votre panier";   
            header('Location: ../vue/html/precommandez.php');
            exit;
            
        } else {
            $_SESSION['erreurprix'] = null;
            unset($_SESSION['erreurprix']);

            $_SESSION['total'] = $_POST['total'];
            $_SESSION['quantite'] = $_POST['quantite'];
            
            include '../Modele/Commande.php';
            header($chemin);
            exit;
        }
    }
    ?>