<?php
        session_start();
           
        include '../../modele/database.php';

        function afficher_message () {
            global $db;
            $_SESSION['id_groupe'];
            //id user
            $q = $db->prepare("SELECT num_client, prenom, nom FROM adherent WHERE adresse_mail = :adresse_mail");
            $q->execute([
                'adresse_mail' => $_SESSION['mail'] 
            ]);
            $result = $q->fetch();
            $id_user = $result['num_client'];
            $_SESSION['id_user'] = $id_user;
            

            //selectionne les bons messages    
            $msg = $db->prepare("SELECT * FROM `message_groupe` WHERE groupe = :id_groupe");
            $msg->execute([
                'id_groupe' => $_SESSION['id_groupe']
            ]);
                
            $u = array ();
            $i = 0;
            while ($donnees =  $msg->fetch()){
                
                if ($donnees['from_id'] == $id_user) {
                    $u[$i]= "Vous : ".$donnees['contenu']." at ".$donnees['creat_at']."<br>";
                }else if ($donnees['coach'] !== NULL) {
                    $a = $db->prepare("SELECT num_coach, prenom, nom FROM coach WHERE num_coach = :id");
                    $a->execute([
                        'id' => $donnees['coach']
                    ]);
                    $result = $a->fetch();
                    $id_coach = $result['num_coach'];
                    $nom_coach = $result['nom'];
                    $prenom_coach = $result['prenom']; 
                    $u[$i]= $prenom_coach." ".$nom_coach."(coach) : ".$donnees['contenu']." at ".$donnees['creat_at']."<br>";
                } else {
                     //id corres
                    $a = $db->prepare("SELECT num_client, prenom, nom FROM adherent WHERE num_client = :id");
                    $a->execute([
                        'id' => $donnees['from_id']
                    ]);
                    $result = $a->fetch();
                    $id_corres = $result['num_client'];
                    $nom_corres = $result['nom'];
                    $prenom_corres = $result['prenom']; 
                    $u[$i]= $prenom_corres." ".$nom_corres." : ".$donnees['contenu']." at ".$donnees['creat_at']."<br>";
                }
            $i++;
            }
            return $u;
        }
        
        if(isset($_POST['Envoyez'])) {
            $_SESSION['message'] = $_POST['message'];
            include '../modele/message_coach_adherent.php';
            header('Location: ../vue/html/message_groupe_adherent.php');
            exit;
        }
    ?>