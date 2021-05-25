<?php
    session_start();

    include 'database.php';
    global $db;
    extract($_SESSION);

    $q = $db->prepare("SELECT Coach_num_coach FROM entrainer WHERE Adherent_num_client = :num_client");
    $q->execute([
        'num_client' => $num_client 
    ]);
    $user = $q->fetch(); 
    $_SESSION['num_coach'] = $user['Coach_num_coach'];


    if ($num_coach == 1) {
        $num_coach = 1; 
    } else {

        $q = $db->prepare("SELECT * FROM coach JOIN entrainer ON coach.num_coach = entrainer.Coach_num_coach WHERE entrainer.Coach_num_coach = :num_coach");
        $q->execute([
        'num_coach' => $num_coach 
        ]);
        $result = $q->fetch();

        $coach = $result['prenom'];
    }
    // if ($vu) {
    //     header('Location: http://localhost/Projets/BTT/vue/html/choisir_coach.php');
    //     exit;
    // }
?>