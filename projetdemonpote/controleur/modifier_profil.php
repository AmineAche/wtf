<?php
    session_start();
    include '../modele/modifier_profil.php';
    header('Location: ../vue/html/modifier_profil.php');
    exit;
?>