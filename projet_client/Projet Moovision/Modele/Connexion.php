<?php
    session_start();
    include 'Database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM Utilisateurs WHERE mail = :mail");
    $q->execute([
        'mail' => $_SESSION['mail']
    ]);
    $result = $q->fetch();

    if ($result == false) {
        $_SESSION["erreur"] = "L'email ou le mot de passe est incorrect";
        $chemin = 'Location: ../vue/html/connexion.php';
    } else {
        $hashpassword = $result['mot_de_passe'];
        if (!password_verify($_SESSION['mot_de_passe'], $hashpassword)) {

            $_SESSION['erreur'] = "L'email ou le mot de passe est incorrect";

            $chemin = 'Location: ../vue/html/connexion.php';
            $_SESSION['Connecté'] = false;
        } else {
            $_SESSION["erreur"] = null;
            $_SESSION['Connecté'] = true;
            $chemin = 'Location: ../index.php';
        }
    }
?>