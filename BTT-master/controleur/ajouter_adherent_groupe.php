<?php
    session_start();
    $_SESSION['g'] = $_POST['g'];
    $y =1;
    $_SESSION['client'] = array ();

    for ($i = 1; $i<= $_SESSION['compteur']; $i++) {
        if (!empty($_POST[$i])) {
            
            $_SESSION['client'][$y] = $_POST[$i];
            //echo $i."<br>";
            //echo $_SESSION['client'][$y]."<br>";
            $y++;
        }
    }
    header('Location: ../modele/ajouter_adherent_groupe.php');
?>