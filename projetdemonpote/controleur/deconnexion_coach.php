<?php
    session_start();
    include '../modele/deconnexion_coach.php';        
    header('Location: ../index.php');
    exit;
?>