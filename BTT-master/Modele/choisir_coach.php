<?php
    session_start();
    extract($_SESSION);

    include 'database.php';
    global $db;
    $q = $db->prepare("SELECT * FROM coach JOIN entrainement_maison ON coach.num_coach = entrainement_maison.num_coach WHERE categories = :categories");
    $q->execute([
        'categories' => $categories 
    ]);
    
    $result = $q->fetch();
    
    if ($_SESSION['res'] == 'oui') {
        $num = 1;
        $req = $db->query("UPDATE entrainer SET Coach_num_coach = '$num' WHERE Adherent_num_client = '$num_client'");
        $chemin = 'Location: ../vue/html/choisir_coach.php';
    } else {

        unset($_SESSION['res']);
        $num = $result['num_coach'];
        $req = $db->query("UPDATE entrainer SET Coach_num_coach = '$num' WHERE Adherent_num_client = '$num_client'");
        
        $_SESSION['coach'] = $result['prenom'];
        if ($result['presence'] == 'non') {
            $_SESSION['presence'] = 'deconnecter';
        } else {
            $_SESSION['presence'] = 'connecter';
        }
        

        $chemin = 'Location: ../vue/html/affiche_coach.php';
    }
?>