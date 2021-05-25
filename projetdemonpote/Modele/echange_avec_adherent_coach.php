<?php
        session_start();
            
        //recuperer les users
        function index () {
            global $db;
            $users = $db->prepare("SELECT * FROM `adherent` JOIN `entrainer` ON entrainer.Adherent_num_client = adherent.num_client Where Coach_num_coach = :num_coach");
            $users->execute([
                'num_coach' => $_SESSION['num_coach']
            ]);
                
            $u = "";
            while ($donnees =  $users->fetch()){
                $u .= "<form action='./message_coach_adherent.php' method='POST'><input type='submit' name='go' value='".$donnees['prenom']." ".$donnees['nom']."'><input type='hidden' name='id' value='".$donnees['num_client']."'></form><br>";
            }
            return $u;
        }

        //afficher les groupes de la personne
        function groupe () {
        global $db;
        $id_coach = $_SESSION['num_coach'];
        $q = $db->prepare("SELECT appartient.groupe, groupe.nom, groupe.id FROM groupe Join appartient ON appartient.groupe = groupe.id where coach = $id_coach");
        $q->execute();
        
        $u = "";
        while ($donnees =  $q->fetch()){
            $u .= "<form action='./message_groupe_coach.php' method='POST'><p><input type='submit' name='groupe'value='".$donnees['nom']."'></p><input name='id' type='hidden' value='".$donnees['id']."'></form><br>";
        }
        return $u;
        }
?>