<?php
    session_start();

    include 'Database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM Produits");
    $q->execute();

    $result = $q->fetchAll();
?>