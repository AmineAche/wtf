<?php
    session_start();

    include 'Database.php';
    global $db;
    extract($_SESSION);

    $id = $_SESSION['id'];

    $req = $db->prepare("UPDATE Produits SET quantite = :quantite WHERE id = '$id'");
    $req->execute(array(
        ':quantite' => $_SESSION['new_quantite'],
    ));

    if (!$req) {
        $_SESSION['erreurmodif'] = "Il y a eu une erreur pendant la modification du produit.";
    }
?>