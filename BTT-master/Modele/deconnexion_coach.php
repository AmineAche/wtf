<?php
    session_start();

    include 'database.php';
    global $db;

    $q = $db->prepare("UPDATE coach SET presence = 'non' WHERE num_coach = :num_coach");
    $q->execute([
        'num_coach' => $_SESSION['num_coach']
    ]);

    unset($_SESSION);
?>