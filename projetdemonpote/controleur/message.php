    <?php
        session_start();
        
        include '../../modele/database.php';

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
            $a = $db->prepare("SELECT num_client, prenom, nom FROM adherent WHERE adresse_mail = :mail");
            $a->execute([
                'mail' => $_SESSION['m.corres']
            ]);
            $result = $a->fetch();
            $id_corres = $result['num_client'];
            $nom_corres = $result['nom'];
            $prenom_corres = $result['prenom'];
            $_SESSION['id_corres'] = $id_corres;

            //selectionne les bons messages    
            $msg = $db->prepare("SELECT * FROM `chat_et_service` WHERE (from_id = :id_user || from_id = :id_corres) && (to_id = :id_user || to_id = :id_corres)");
            $msg->execute([
                'id_user' => $id_user,
                'id_corres' => $id_corres
            ]);
                
            $u = array ();
            $i = 0;
            while ($donnees =  $msg->fetch()){
                
                if ($donnees['from_id'] == $id_user) {
                    $u[$i]= "Vous : ".$donnees['contenu']." at ".$donnees['creat_at']."<br>";
                } else if ($donnees['from_id'] == $id_corres) {
                    $u[$i]= $prenom_corres." ".$nom_corres." : ".$donnees['contenu']." at ".$donnees['creat_at']."<br>";
                }
            $i++;
            }
            return $u;
        }

        if(isset($_POST['Envoyez'])) {
            $_SESSION['message'] = $_POST['message'];
            include '../modele/message.php';
            header('Location: ../vue/html/message.php');
        }
    ?>