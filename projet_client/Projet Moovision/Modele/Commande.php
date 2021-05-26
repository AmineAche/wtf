<?php
    session_start();

    include 'Database.php';
    global $db;

    $q = $db->prepare("SELECT * FROM Utilisateurs WHERE username = :username");
    $q->execute([
        'username' => $_SESSION['user'] 
    ]);
    $result = $q->fetch();

    if (!$result) {
        $_SESSION['erreur_commande'] = "Désolé ! Il y a un problème avec votre commande, essayez plus tard.";
        $chemin = 'Location: ../vue/html/precommandez.php';
    } else {

        $req = $db->prepare("INSERT INTO Commande(prix,quantite_total,adresse_expedition,id_utilisateur) VALUES(:prix,:quantite_total,:adresse_expedition,:id_utilisateur)");
        $req->execute(array(
            ':prix' => $_SESSION['total'],
            ':quantite_total' => $_SESSION['quantite'],
            ':adresse_expedition' => $result['adresse'],
            ':id_utilisateur' => $result['id']
        ));
        if (!$req) {
            $_SESSION['erreur_commande'] = "Désolé ! Il y a un problème avec votre commande, essayez plus tard.";
            $chemin = 'Location: ../vue/html/precommandez.php';
        }
        $chemin = 'Location: ../vue/html/youdidit.php';
    }
?>