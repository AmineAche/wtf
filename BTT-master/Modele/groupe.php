<?php
    session_start();
            
        include './database.php';
        global $db;
        $req = $db->prepare("INSERT INTO groupe(nom) VALUES (:nom)");
        $req->execute([
            'nom' => $_SESSION['groupe']
        ]);
        
        $req = $db->prepare("SELECT LAST_INSERT_ID() FROM groupe");
        $req->execute();
        //var_dump ($req);
        $donnees =  $req->fetch();
        $_SESSION['id_groupe'] = $donnees;

        header('Location: ../vue/html/ajouter_adherent_groupe.php');
?>