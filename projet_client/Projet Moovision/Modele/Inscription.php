<?php
    session_start();

    include 'Database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM Utilisateurs WHERE Mail = :Mail");
    $q->execute([
        'Mail' => $_SESSION['mail'] 
    ]);
    $result = $q->rowCount();

    if ($result != 0) {
        $_SESSION['erreurmail'] = "Cette adresse mail est déjà reliée à un compte";
        $chemin = 'Location: ../vue/html/inscription.php';
    } else {
        $options = [
            'cost' => 12,
        ];

        $hashpass = password_hash($_SESSION['mot_de_passe'], PASSWORD_BCRYPT, $options);

        $req = $db->prepare("INSERT INTO Utilisateurs(username,prenom,nom,mail,mot_de_passe,telephone,adresse,localite,salaire) VALUES(:username,:prenom,:nom,:mail,:mot_de_passe,:telephone,:adresse,:localite,:salaire)");
        $req->execute(array(
            ':username' => $_SESSION['username'],
            ':prenom' => $_SESSION['prenom'],
            ':nom' => $_SESSION['nom'],
            ':mail' => $_SESSION['mail'],
            ':mot_de_passe' => $hashpass,
            ':telephone' => $_SESSION['telephone'],
            ':adresse' =>  $_SESSION['adresse'],
            ':localite' =>  $_SESSION['localite'],
            ':salaire' => $_SESSION['salaire']
        ));

        $chemin = 'Location: ../vue/html/connexion.php';
    }
?>