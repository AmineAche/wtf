<?php
        session_start();
        
        if(isset($_POST['go'])){
            $_SESSION["erreur"] = null;
            $_SESSION["error"] = null;
            $_SESSION['erreurmail'] = null;
            $valid = true;
            $validmdp = true;
            $info = array();
            $erreur = NULL;
         

        foreach( array('username', 'prenom', 'nom', 'mail', 'mot_de_passe', 'telephone', 'adresse', 'localite', 'salaire', 'handicap') as $key ) {
            if( isset($_POST[$key]) && trim($_POST[$key]) != '' ) {

                    $info[$key] = htmlspecialchars($_POST[$key]);
                } else {
                    $erreur .= $key." ";
                    $valid = false;
                } 
            }
            if (empty($_POST['cmot_de_passe'])) {
                $valid = false;
                $erreur .= "verification du mot de passe";
            }

            extract($_POST);
            if ($mot_de_passe != $cmot_de_passe) {
                $validmdp = false;
            }

            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $validmail = true;
            } else {
                $validmail = false;
            }
        
            //Verifie que tous les champs soient remplis et que les deux mot de passe entré soit les mêmes 

            if( $valid == false || $validmdp == false || $validmail == false){
            
            if ($valid == false) {
                $_SESSION["erreur"] = "Il manque de(s) information(s) dans le(s) champs $erreur.";   
            } 
            if ($validmdp == false) {
                $_SESSION['error'] = "les deux mots de passe ne correspondent pas.";   
            }

            if ($validmail == false){
                $_SESSION['erreurmail'] = "l'adresse mail n'est pas valide";
            }
            header('Location: ../vue/html/inscription.php');
            exit;
            
            
        } else {
            unset($_SESSION["erreur"]);
            unset($_SESSION["error"]);
            unset($_SESSION['erreurmail']);

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['prenom'] = $_POST['prenom'];
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['mot_de_passe'] = $_POST['mot_de_passe'];
            $_SESSION['telephone'] = $_POST['telephone'];
            $_SESSION['adresse'] = $_POST['adresse'];
            $_SESSION['localite'] = $_POST['localite'];
            $_SESSION['salaire'] = $_POST['salaire'];
            $_SESSION['handicap'] = $_POST['handicap'];
            
            include '../Modele/Utilisateur.php';
            header($chemin);
            exit;
        }
    }
    ?>