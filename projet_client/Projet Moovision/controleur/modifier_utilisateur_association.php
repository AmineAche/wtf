<?php
    session_start();

    $_SESSION['id'] = $_POST['id_user'];
    $_SESSION['certif'] = $_POST['certif'];

    include '../modele/Modifier_utilisateur_association.php';
    header('Location: ../vue/html/association.php');
    exit;
?>