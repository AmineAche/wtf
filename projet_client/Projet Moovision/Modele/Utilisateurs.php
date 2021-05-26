<?php
    session_start();

    include 'Database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM Utilisateurs");
    $q->execute();

    $result = $q->fetchAll();
?>