<?php
    session_start();
            
    //recuperer les adherent
    function index () {
        global $db;
        $users = $db->prepare("SELECT num_client, nom, prenom FROM adherent");
        $users->execute();
                
        $u = "";
        while ($donnees =  $users->fetch()){
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
        $users = $db->prepare("INSERT INTO appartient(groupe, coach) VALUE (:groupe, :coach)");
            $users->execute([
            'coach' => $_SESSION['num_coach'],
            'groupe' => $_SESSION['id_groupe'][0]
        ]);
        header('Location: ../vue/html/echanger_avec_adherent_coach.php');
        exit;
    }

?>