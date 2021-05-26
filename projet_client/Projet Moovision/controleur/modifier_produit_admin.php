<?php
    session_start();

    $_SESSION['id'] = $_POST['id'];
    $_SESSION['new_quantite'] = $_POST['new_quantite'];

    include '../modele/Modifier_produit_admin.php';
    header('Location: ../vue/html/adminstock.php');
    exit;
?>