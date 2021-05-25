<?php
    session_start();

    include 'database.php';
    global $db;
    extract($_SESSION);

    // $req = $db->query("DELETE FROM adherent WHERE num_client = '$num_client'");
    // $req->execute();

    // $req = $db->prepare("INSERT INTO adherent(num_client,nom,prenom,adresse_mail,ville,date_de_naissance,taille,poid,sexe,statut) VALUES(:num_client,:nom,:prenom,:adresse_mail,:ville,:date_naissance,:taille,:poid,:sexe,:statut)");
    // $req->execute(array(
    //     'num_client' => ($num_client+1),
    //     'nom' => $_SESSION['user'][1],
    //     'prenom' => $_SESSION['user'][2],
    //     'adresse_mail' => $_SESSION['user'][3],
    //     'ville' => $_SESSION['user'][4],
    //     'date_naissance' => $_SESSION['user'][5],
    //     'taille' =>  $_SESSION['user'][6],
    //     'poid' =>  $_SESSION['user'][7],
    //     'sexe' => $_SESSION['user'][8],
    //     'statut' => $_SESSION['user'][11]
    // ));

    $req = $db->prepare("UPDATE adherent SET num_client = :num_client, nom = :nom, prenom = :prenom, adresse_mail = :adresse_mail, ville = :ville, date_de_naissance = :date_naissance, taille = :taille, poid = :poid, sexe = :sexe, statut = :statut WHERE num_client = :num_client");
    $req->execute(array(
        'num_client' => ($num_client),
        'nom' => $_SESSION['user'][1],
        'prenom' => $_SESSION['user'][2],
        'adresse_mail' => $_SESSION['user'][3],
        'ville' => $_SESSION['user'][4],
        'date_naissance' => $_SESSION['user'][5],
        'taille' =>  $_SESSION['user'][6],
        'poid' =>  $_SESSION['user'][7],
        'sexe' => $_SESSION['user'][8],
        'statut' => $_SESSION['user'][11]
    ));

    $q = $db->prepare("UPDATE progres SET taille = :taille, poid = :poid, objectif = :objectif WHERE Adherent_num_client = '$num_client'");
    $q->execute(array(
        'taille' =>  $_SESSION['user'][6],
        'poid' =>  $_SESSION['user'][7],
        'objectif' => $_SESSION['obje']
    ));

    if ($_SESSION['mdp'] != $_SESSION['user'][9]) {
        $options = [
            'cost' => 12,
        ];
        
        $mdp = password_hash($_SESSION['user'][9], PASSWORD_BCRYPT, $options);
    }

    $q = $db->prepare("UPDATE adherent SET mot_de_passe = '$mdp' WHERE num_client = '$num_client'");
    $q->execute();

    $q = $db->prepare("SELECT * FROM adherent WHERE adresse_mail = :adresse_mail");
    $q->execute([
        'adresse_mail' => $_SESSION['user'][3] 
    ]);
    $result = $q->fetch();
    
    $_SESSION['prenom'] = $result['prenom'];
    $_SESSION['num_client'] = $result['num_client'];
    $_SESSION['mdp'] = $result['mot_de_passe'];
    $_SESSION['nom'] = $result['nom'];
    $_SESSION['objectif'] = $result['objectif']; 
?>