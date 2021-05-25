<?php
    session_start();
    $_SESSION['vu'] = $_GET['vu'];

    include '../modele/choix_coach.php';
    header( 'Location: ../vue/html/message_coach.php');
    exit;
?>