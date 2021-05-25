<?php
        session_start();
            
    //recuperer les users
    function index () {
        global $db;
        $users = $db->prepare("SELECT `prenom`,`nom`,`adresse_mail` FROM `adherent`  Where nom != :nom");
        $users->execute([
            'nom' => $_SESSION['nom']
        ]);
                
        $u = "";
        while ($donnees =  $users->fetch()){
            $u .= "<form action='./message.php' method='POST'><input type='submit' name='go' value='".$donnees['prenom']." ".$donnees['nom']."'><input type='hidden' name='mail' value='".$donnees['adresse_mail']."'></form><br>";
        }
        return $u;
    }
    
     //afficher les groupes de la personne
     function groupe () {
        global $db;
        $id_client = $_SESSION['num_client'];
        $q = $db->prepare("SELECT appartient.groupe, groupe.nom, groupe.id FROM groupe Join appartient ON appartient.groupe = groupe.id where client = $id_client");
        $q->execute();
        
        $u = "";
        while ($donnees =  $q->fetch()){
            $u .= "<form action='./message_groupe_adherent.php' method='POST'><p><input type='submit' name='groupe'value='".$donnees['nom']."'></p><input name='id' type='hidden' value='".$donnees['id']."'></form><br>";
        }
        return $u;
    }
?>