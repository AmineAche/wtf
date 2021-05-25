<?php
        session_start();
        
        include '../../modele/database.php';

        function afficher_message () {
            global $db;
            //id user
            $nom = $_SESSION['prenom']." ".$_SESSION['nom'];
            $q = $db->prepare("SELECT num_coach, prenom, nom FROM coach WHERE prenom = :prenom");
            $q->execute([
                'prenom' => $_SESSION['prenom']
            ]);
            $result = $q->fetch();
            $id_user = $result['num_coach'];
            $nom_user = $result['nom'];
            $prenom_user = $result['prenom'];
            $_SESSION['id_user'] = $id_user;
            
            //id corres
            $a = $db->prepare("SELECT num_coach, prenom, nom FROM coach WHERE num_coach = :id");
            $a->execute([
                'id' => $_SESSION['id_corres']
            ]);
            $result = $a->fetch();
            $id_corres = $result['num_coach'];
            $nom_corres = $result['nom'];
            $prenom_corres = $result['prenom'];
            $_SESSION['id_corres'] = $id_corres;

            //selectionne les bons messages    

            $msg = $db->prepare("SELECT * FROM `messagerie_coach` WHERE (from_id = :id_user || from_id = :id_corres) && (to_id = :id_user || to_id = :id_corres)");
            $msg->execute([
                'id_user' => $id_user,
                'id_corres' => $id_corres
            ]);
                
            $u = array ();
            $i = 0;
            while ($donnees =  $msg->fetch()){
                
                if ($donnees['from_id'] == $id_user) {
                    $u[$i]= "Vous : ".$donnees['contenu']." at<br>";
                } else if ($donnees['from_id'] == $id_corres) {
                    $u[$i]= $prenom_corres." ".$nom_corres." : ".$donnees['contenu']." at <br>";/*.$donnees['creat_at']."<br>";*/
                }
            $i++;
            }
            return $u;
        }

        if(isset($_POST['Envoyez'])) {
            $_SESSION['message'] = $_POST['message'];
            header('Location: ../modele/message_c_and_c.php');
        }
    ?>