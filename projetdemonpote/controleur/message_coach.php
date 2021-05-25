<?php
        session_start();
        
        
        function afficher_message () {
            
            global $db;
            //id user
            $nom = $_SESSION['prenom']." ".$_SESSION['nom'];
            $q = $db->prepare("SELECT num_client, prenom, nom FROM adherent WHERE adresse_mail = :adresse_mail");
            $q->execute([
                'adresse_mail' => $_SESSION['mail'] 
            ]);
            $result = $q->fetch();
            $id_user = $result['num_client'];
            $nom_user = $result['nom'];
            $prenom_user = $result['prenom'];
            $_SESSION['id_user'] = $id_user;
            
            //id corres
            $a = $db->prepare("SELECT num_coach, prenom, nom FROM coach WHERE prenom = :coach");
            $a->execute([
                'coach' => $_SESSION['coach']
            ]);
            $result = $a->fetch();
            $id_corres = $result['num_coach'];
            $nom_corres = $result['nom'];
            $prenom_corres = $result['prenom'];
            $_SESSION['id_corres'] = $id_corres;

            //selectionne les bons messages    
            $msg = $db->prepare("SELECT * FROM `messagerie_coach_adherent` WHERE (from_id = :id_user && coach = :id_corres) || (to_id = :id_user && coach = :id_corres)");
            $msg->execute([
                'id_user' => $id_user,
                'id_corres' => $id_corres
            ]);
                
            $u = array ();
            $i = 0;
            while ($donnees =  $msg->fetch()){
                
                if ($donnees['from_id'] == $id_user) {
                    $u[$i]= "Vous : ".$donnees['contenu']." at ".$donnees['create_at']."<br>";
                } else if ($donnees['to_id'] == $id_user) {
                    $u[$i]= $prenom_corres." ".$nom_corres." : ".$donnees['contenu']." at ".$donnees['create_at']."<br>";
                }
            $i++;
            }
            return $u;
        }
        
        if(isset($_POST['Envoyez'])) {
            $_SESSION['message'] = $_POST['message'];
            echo $_POST['message'];
            header('Location: ../modele/message_coach.php');
        }
    ?>