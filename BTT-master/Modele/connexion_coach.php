<?php
    session_start();
    include 'database.php';
    global $db;

    /*$nom = $db->prepare("SELECT 'nom','prenom' FROM adherent WHERE adresse_mail = :adresse_mail");
    $nom->execute([
        'adresse_mail' => $_SESSION['mail'] 
    ]);
    $result = $nom->fetch();
    $_SESSION['nom'] = $result['nom'];
    $_SESSION['prenom'] = $result['prenom'];
    */

    $q = $db->prepare("SELECT * FROM coach WHERE nom = :nom");
    $q->execute([
        'nom' => $_SESSION['nom'] 
    ]);
    $result = $q->fetch();

    if ($result == false) {
        $_SESSION["errer"] = "L'email ou le mot de passe est incorrect";
        $chemin = 'Location: ../vue/html/connexion_coach.php';
    } else {
        $hashpassword = $result['mot_de_passe'];
        if (!password_verify($_SESSION['mot_de_passe'], $hashpassword)) {


            $_SESSION['errer'] = "Les infos sont incorrect";

            $chemin = 'Location: ../vue/html/connexion_coach.php';
        } else {
            $q = $db->prepare("UPDATE coach SET presence = 'oui' WHERE adresse_mail = :mail");
            $q->execute([
                'mail' => $result['adresse_mail']
            ]);
            $_SESSION['prenom'] = $result['prenom'];
            $_SESSION['num_coach'] = $result['num_coach'];
            $_SESSION['nom'] = $result['nom'];
            $_SESSION["errer"] = null;
            $chemin = 'Location: ../vue/html/accueil_coach.php';
        }
    }
?>