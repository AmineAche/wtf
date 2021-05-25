    <?php
        session_start();
        
        include '../../modele/database.php';

        function afficher_message () {
            global $db;
            //id user
            $nom = $_SESSION['prenom']." ".$_SESSION['nom'];
            $q = $db->prepare("SELECT * FROM coach WHERE num_coach = :coach");
            $q->execute([
                'coach' => $_SESSION['num_coach']
            ]);
            $result = $q->fetch();
            $id_user = $result['num_coach'];
            $nom_user = $result['nom'];
            $prenom_user = $result['prenom'];
            $_SESSION['id_user'] = $id_user;
            
            //id corres
            $a = $db->prepare("SELECT num_client, prenom, nom FROM adherent WHERE num_client = :id");
            $a->execute([
                'id' => $_SESSION['id_corres']
            ]);
            $result = $a->fetch();
            $id_corres = $result['num_client'];
            $nom_corres = $result['nom'];
            $prenom_corres = $result['prenom'];

            //selectionne les bons messages    
            $msg = $db->prepare("SELECT * FROM `messagerie_coach_adherent` WHERE (from_id = :id_corres && coach = :id_user) || (to_id = :id_corres && coach = :id_user)");
            $msg->execute([
                'id_user' => $id_user,
                'id_corres' => $id_corres
            ]);
                
            $u = array ();
            $i = 0;
            while ($donnees =  $msg->fetch()){
                
                if ($donnees['to_id'] == $id_corres) {
                    $u[$i]= "Vous : ".$donnees['contenu']." at ".$donnees['create_at']."<br>";
                } else if ($donnees['from_id'] == $id_corres) {
                    $u[$i]= $prenom_corres." ".$nom_corres." : ".$donnees['contenu']." at ".$donnees['create_at']."<br>";
                }
            $i++;
            }
            return $u;
        }

        if(isset($_POST['Envoyez'])) {
            $_SESSION['message'] = $_POST['message'];
            header('Location: ../modele/message_coach_adherent.php');
        }
    ?>