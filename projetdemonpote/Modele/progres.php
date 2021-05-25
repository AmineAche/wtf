<?php
    session_start();
    
    include 'database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM progres WHERE Adherent_num_client = :Adherent_num_client");
    $q->execute([
        'Adherent_num_client' => $_SESSION['num_client'] 
    ]);
    $result = $q->fetch();
    $taille = $result['taille'];

    if ($result['sexe'] == 'Homme') {
        $num = 4;
    } else {
        $num = 2.5;
    }
    extract($_SESSION);

    $poid_ideal = ($taille - 100)-(($taille - 150)/$num);

    if ($result['poid'] > $poid ) {
        $diff = abs($poid - $result['poid']);
        if ($poid > ($poid_ideal+15)) {
            $_SESSION['msg'] = "Vous avez perdu $diff kilos et vous êtes en surpoids d'après la formule de Lorentz";
        } elseif ($poid < ($poid_ideal-15)) {
            $_SESSION['msg'] = "Vous avez perdu $diff kilos et vous êtes en sous-poids d'après la formule de Lorentz";
        } else {
            $_SESSION['msg'] = "Vous avez perdu $diff kilos et vous êtes en forme d'après la formule de Lorentz";
        }
        if ($result['objectif'] == 'maigrir') {
            $_SESSION['erreur'] = 'Vous êtes en phase avec votre objectif';
            $q = $db->prepare("UPDATE progres SET evolution = 'positive' WHERE Adherent_num_client = '$num_client'");
            $q->execute();
        } else {
            $_SESSION['erreur'] = 'Vous vous éloignez de votre objectif';
            $q = $db->prepare("UPDATE progres SET evolution = 'negative' WHERE Adherent_num_client = '$num_client'");
            $q->execute();
        }
    } elseif ($result['poid'] < $poid ) {
        $diff = abs($result['poid'] - $poid);
        if ($poid > ($poid_ideal+15)) {
            $_SESSION['msg'] = "Vous avez pris $diff kilos et vous êtes en surpoids d'après la formule de Lorentz";
        } elseif ($poid < ($poid_ideal-15)) {
            $_SESSION['msg'] = "Vous avez pris $diff kilos et vous êtes en sous-poids d'après la formule de Lorentz";
        } else {
            $_SESSION['msg'] = "Vous avez pris $diff kilos et vous êtes en forme d'après la formule de Lorentz";
        }
        if ($result['objectif'] == 'prendre_du_poids') {
            $_SESSION['erreur'] = 'Vous êtes en phase avec votre objectif';
            $q = $db->prepare("UPDATE progres SET evolution = 'positive' WHERE Adherent_num_client = '$num_client'");
            $q->execute();            
        } elseif ($result['objectif'] = 'maigrir') {
            $_SESSION['erreur'] = 'Vous vous éloignez de votre objectif';
            $q = $db->prepare("UPDATE progres SET evolution = 'negative' WHERE Adherent_num_client = '$num_client'");
            $q->execute();
        }
    } else {
        $_SESSION['msg'] = 'Aucun changement à remarqué';
        $q = $db->prepare("UPDATE progres SET evolution IS NULL WHERE Adherent_num_client = '$num_client'");
        $q->execute();
    }

    $q = $db->prepare("UPDATE adherent SET poid = '$poid' WHERE adresse_mail = '$mail'");
    $q->execute();
    $q = $db->prepare("UPDATE progres SET poid = '$poid' WHERE Adherent_num_client = '$num_client'");
    $q->execute();

    $objectif = $result['objectif'];
?>