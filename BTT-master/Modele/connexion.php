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

    $q = $db->prepare("SELECT * FROM adherent WHERE adresse_mail = :adresse_mail");
    $q->execute([
        'adresse_mail' => $_SESSION['mail'] 
    ]);
    $result = $q->fetch();

    if ($result == false) {
        $_SESSION["errer"] = "L'email ou le mot de passe est incorrect";
        $chemin = 'Location: ../vue/html/connexion.php';
    } else {
        $hashpassword = $result['mot_de_passe'];
        if (!password_verify($_SESSION['mot_de_passe'], $hashpassword)) {


            $_SESSION['errer'] = "L'email ou le mot de passe est incorrect";

            $chemin = 'Location: ../vue/html/connexion.php';
        }
        $_SESSION['prenom'] = $result['prenom'];
        $_SESSION['num_client'] = $result['num_client'];
        $_SESSION['mdp'] = $result['mot_de_passe'];
        $_SESSION['nom'] = $result['nom'];
        $_SESSION["errer"] = null;
        $chemin = 'Location: ../vue/html/accueil_membre.php';
    }
?>

<!-- <a href="../index.php">Déconnexion</a> -->
