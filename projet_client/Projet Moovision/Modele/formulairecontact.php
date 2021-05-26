<?php

    session_start(); 

    include 'Database.php';
    global $db;

        $req = $db->prepare("INSERT INTO Contact(prenom,nom,mail,telephone,messages) VALUES(:prenom,:nom,:mail,:telephone,:messages)");
        $req->execute(array(
            ':prenom' => $_SESSION['prenomcontact'],
            ':nom' => $_SESSION['nomcontact'],
            ':mail' => $_SESSION['mailcontact'],
            ':telephone' => $_SESSION['telcontact'],
            ':messages' =>  $_SESSION['messagecontact'],
        ));
        echo ($_SESSION['prenomcontact']);
        echo ($_SESSION['nomcontact']);
        $chemin = 'Location: ../';
?>