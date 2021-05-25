<?php
    session_start();
    extract($_SESSION);

    include 'database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM entrainer WHERE Adherent_num_client = :num_client");
    $q->execute([
        'num_client' => $_SESSION['num_client']
    ]);
    $result = $q->fetch();

    if ($result['Coach_num_coach'] == 1) {
        $chemin = 'Location: ../Vue/html/choisir_coach.php';
    } else {

        $q = $db->prepare("SELECT coach.prenom, coach.presence FROM coach JOIN entrainer ON coach.num_coach = Coach_num_coach JOIN entrainement_maison ON entrainement_maison.num_coach = entrainer.Coach_num_coach WHERE entrainement_maison.categories = :categories AND Adherent_num_client = :num_client"); 
        $q->execute([
            'categories' => $_SESSION['categories'],
            'num_client' => $_SESSION['num_client']
        ]);
        $result = $q->fetch();
    
        $_SESSION['coach'] = $result['prenom'];
        if ($result['presence'] == 'non') {
            $_SESSION['presence'] = 'deconnecter';
        } else {
            $_SESSION['presence'] = 'connecter';
        }
        $chemin = 'Location: ../vue/html/message_coach.php';
    }
?>