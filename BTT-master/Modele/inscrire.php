<?php
    session_start();

    include 'database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM adherent WHERE adresse_mail = :adresse_mail");
    $q->execute([
        'adresse_mail' => $_SESSION['mail'] 
    ]);
    $result = $q->rowCount();

    if ($result != 0) {
        $_SESSION['erreurmail'] = "Cette adresse mail est déjà reliée à un compte";
        $chemin = 'Location: ../vue/html/inscrire.php';
    } else {
        $options = [
            'cost' => 12,
        ];

        $hashpass = password_hash($_SESSION['mot_de_passe'], PASSWORD_BCRYPT, $options);

        $req = $db->prepare("INSERT INTO adherent(nom,prenom,adresse_mail,ville,date_de_naissance,taille,poid,sexe,mot_de_passe) VALUES(:nom,:prenom,:adresse_mail,:ville,:date_naissance,:taille,:poid,:sexe,:mot_de_passe)");
        $req->execute(array(
            'nom' => $_SESSION['nom'],
            'prenom' => $_SESSION['prenom'],
            'adresse_mail' => $_SESSION['mail'],
            'ville' => $_SESSION['ville'],
            'date_naissance' => $_SESSION['date'],
            'taille' =>  $_SESSION['taille'],
            'poid' =>  $_SESSION['poid'],
            'sexe' => $_SESSION['sexe'],
            'mot_de_passe' => $hashpass
        ));

        $q = $db->prepare("SELECT * FROM adherent WHERE adresse_mail = :adresse_mail");
        $q->execute([
            'adresse_mail' => $_SESSION['mail'] 
        ]);
        $result = $q->fetch();

        $num_client = $result['num_client'];

        $req = $db->prepare("INSERT INTO progres(Adherent_num_client,taille,poid) VALUES(:Adherent_num_client,:taille,:poid)");
        $req->execute(array(
            'Adherent_num_client' => $num_client,
            'taille' =>  $_SESSION['taille'],
            'poid' =>  $_SESSION['poid']
        ));

        $req = $db->prepare("INSERT INTO entrainer(Adherent_num_client,Coach_num_coach,Entrainement_maison_id_entrainement) VALUES(:Adherent_num_client,:Coach_num_coach,:Entrainement_maison_id_entrainement)");
        $req->execute(array(   
            'Adherent_num_client' => $num_client,
            'Coach_num_coach' =>  1,
            'Entrainement_maison_id_entrainement' =>  8
        ));

        $chemin = 'Location: ../vue/html/choisir_un_abonnement.php';
    }
?>
