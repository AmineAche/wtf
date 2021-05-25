    <?php
        session_start();
        // isset
        if(isset($_POST['go'])){
            $_SESSION["erreur"] = null;
            $_SESSION["error"] = null;
            $_SESSION['erreurdate'] = null;
            $_SESSION['erreurmail'] = null;
            $valid = true;
            $validmdp = true;
            $info = array();
            $erreur = NULL;
         

        foreach( array('nom', 'prenom', 'mail', 'ville', 'date', 'taille', 'poid', 'sexe', 'objectif', 'mot_de_passe') as $key ) {
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
        
            function age($date) { 
                $ans = substr($date, 0, -6);
                $age = date("Y") - $ans; 
                if (date('md') < date('md', strtotime($date))) { 
                    return $age - 1; 
                }
                return $age; 
            } 
            $date = $_POST['date'];
            $validdate = true;
            if (age($date) < 18)  {
                $validdate = false;
            }       
            // validation de l'adresse mail
            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $validmail = true;
            } else {
                $validmail = false;
            }
        
            //Verifie que tous les champs soient remplis et que les deux mot de passe entré soit les mêmes 

            if( $valid == false || $validmdp == false || $validdate == false || $validmail == false){
            
            if ($valid == false) {
                $_SESSION["erreur"] = "Il manque de(s) information(s) dans le(s) champs $erreur.";   
            } 
            if ($validmdp == false) {
                $_SESSION['error'] = "les deux mots de passe ne correspondent pas.";   
            }
            if ($validdate == false){
                $_SESSION['erreurdate'] = "la date entrée n'est pas valide il faut avoir 18ans";
            }
            if ($validmail == false){
                $_SESSION['erreurmail'] = "l'adresse mail n'est pas valide";
            }
            header('Location: ../vue/html/inscrire.php');
            exit;
            
            
        } else {
            unset($_SESSION["erreur"]);
            unset($_SESSION["error"]);
            unset($_SESSION['erreurdate']);
            unset($_SESSION['erreurmail']);

            $_SESSION['nom'] = utf8_decode($_POST['nom']);
            $_SESSION['prenom'] = utf8_decode($_POST['prenom']);
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['ville'] = $_POST['ville'];
            $_SESSION['date'] = $_POST['date'];
            $_SESSION['taille'] = $_POST['taille'];
            $_SESSION['poid'] = $_POST['poid'];
            $_SESSION['objectif'] = $_POST['objectif'];
            $_SESSION['sexe'] = $_POST['sexe'];
            $_SESSION['mot_de_passe'] = $_POST['mot_de_passe'];
            
            include '../modele/inscrire.php';
            header($chemin);
            exit;
        }
    }
        //envoie vers la page abonnement si oui sinon renvoie vers la page inscription
    ?>
