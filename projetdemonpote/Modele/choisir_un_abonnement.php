<?php
    session_start();
    include '../modele/database.php';

    unset($_SESSION['erreur']);
    extract($_SESSION);

    include 'database.php';
    global $db;
    
    //id user
    $nom = $_SESSION['prenom']." ".$_SESSION['nom'];
    $q = $db->prepare("SELECT num_client, prenom, nom FROM adherent WHERE adresse_mail = :adresse_mail");
    $q->execute([
        'adresse_mail' => $_SESSION['mail'] 
    ]);
    $result = $q->fetch();
    $id_user = $result['num_client'];
    $nom_user = $result['nom'];
    $prenom_user = $result['prenom'];
    $_SESSION['id_user'] = $id_user;

    if ($abonnement == 1) {
        $type = 'Classique';
        $prix = 19.99;
    } elseif($abonnement == 2) {
        $type = 'Rupture';
        $prix = 29.99;
    } elseif ($abonnement == 3) {
        $type = 'Strong';
        $prix = 29.99;
    }

    $req = $db->prepare("INSERT INTO `type_abonnement`(description_abonnement,tarif) VALUES(:id_abo,:id_user)");
    $req->execute([    
        'id_abo' => $type,
        'id_user' => $prix
    ]);


    // $req = $db->prepare("INSERT INTO `inscrire`(Type_abonnement_code_abonnement,Adherent_num_client) VALUES(:id_abo,:id_user)");
    // $req->execute([    
    //     'id_abo' => $type,
    //     'id_user' => $_SESSION['id_user']
    // ]);
    // unset($_SESSION);

?>