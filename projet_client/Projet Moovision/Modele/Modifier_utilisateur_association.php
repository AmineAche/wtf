<?php
    session_start();

    include 'Database.php';
    global $db;
    extract($_SESSION);

    $id = $_SESSION['id'];

    if (isset($_SESSION['certif'])) {
        $_SESSION['certif'] = "1";
    } else {
        $_SESSION['certif'] = "0";
    }

    $req = $db->prepare("UPDATE Utilisateurs SET certification_handicap = :certification_handicap WHERE id = '$id'");
    $req->execute(array(
        ':certification_handicap' => $_SESSION['certif'],
    ));

    if (!$req) {
        $_SESSION['erreurmodif'] = "Il y a eu une erreur pendant la modification de l'utilisateur.";
    }

    $chemin = 'Location: ../vue/html/association.php';
?>