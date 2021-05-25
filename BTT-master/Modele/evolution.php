<?php
    session_start();

    include 'database.php';
    global $db;
    extract($_SESSION);

    $i=0;
    $q = $db->prepare("SELECT adherent.nom, adherent.prenom, progres.evolution FROM adherent JOIN progres ON num_client = Adherent_num_client WHERE num_client = '$num_client'");
    $q->execute();
    while($client = $q->fetch()) {
        foreach($client as $key => $val) {
            $tab[$key] = $val;
        }
    }
?>