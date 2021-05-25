<?php
    session_start();
            
    //recuperer les adherent
    function index () {
        global $db;
        $_SESSION['id_groupe'];
        
        /*$users = $db->prepare("SELECT appartient.groupe, appartient.client, adherent.num_client, adherent.nom, adherent.prenom FROM adherent Join appartient ON appartient.client = adherent.num_client where groupe = :groupe");
        $users->execute([
            'groupe' => $_SESSION['id_groupe']
        ]);*/

        $users = $db->prepare("SELECT num_client, nom, prenom FROM adherent WHERE NOT EXISTS( SELECT * FROM appartient WHERE adherent.num_client = appartient.client AND appartient.groupe = :groupe)");
        $users->execute([
            'groupe' => $_SESSION['id_groupe']
        ]);
                
        $u = "";
        while ($donnees =  $users->fetch()){    
            //echo $donnees['prenom']."<br>";
            $u .= "<input type='checkbox' name='".$donnees['num_client']."' value='".$donnees['num_client']."'>".$donnees['prenom']." ".$donnees['nom']."<br>";
            $c = $donnees['num_client'];
        }
        $_SESSION['compteur'] = $c;
        return $u;
    }
    
    if(isset($_SESSION['g'])) {
        unset($_SESSION['g']);
        include './database.php';
        global $db;
        for ($i = 0; $i < count ($_SESSION['client'])+1; $i++) {
            if (!empty ($_SESSION['client'][$i])) {
                $users = $db->prepare("INSERT INTO appartient(client, groupe) VALUE (:client, :groupe)");
                $users->execute([
                    'client' => $_SESSION['client'][$i],
                    'groupe' => $_SESSION['id_groupe'][0]
                ]);
            }
        }
        header('Location: ../vue/html/message_groupe_coach.php');
        exit;
    }

?>