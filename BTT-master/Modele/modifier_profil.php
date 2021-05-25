<?php
    session_start();
    
    include 'database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM adherent WHERE num_client = :num_client");
    $q->execute([
        'num_client' => $_SESSION['num_client'] 
    ]);
    $user = $q->fetch();

    foreach($user as $key => $val) {
        $tab[$key] = $val;    
    }

    $_SESSION['user'] = $tab;

    $q = $db->prepare("SELECT * FROM progres WHERE Adherent_num_client = :num_client");
    $q->execute([
        'num_client' => $_SESSION['num_client'] 
    ]);
    $user = $q->fetch();
    
    $_SESSION['objectif'] = $user['objectif'];
?>