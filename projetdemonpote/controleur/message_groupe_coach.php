<?php
        session_start();
           
        include '../../modele/database.php';

        function afficher_message () {
            global $db;
            $_SESSION['id_groupe'];
            //selectionne les bons messages    
            $msg = $db->prepare("SELECT * FROM `message_groupe` WHERE groupe = :id_groupe");
            $msg->execute([
                'id_groupe' => $_SESSION['id_groupe']
            ]);
                
            $u = array ();
            $i = 0;
            while ($donnees =  $msg->fetch()){
                
                if ($donnees['coach'] == $_SESSION['num_coach']) {
                    $u[$i]= "Vous : ".$donnees['contenu']." at ".$donnees['creat_at']."<br>";
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
            header('Location: ../modele/message_groupe_coach.php');
        }
    ?>