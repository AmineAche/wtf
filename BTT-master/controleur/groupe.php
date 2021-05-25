<?php
    session_start();
    $_SESSION['groupe'] = $_POST['groupe']; 
    header('Location: ../modele/groupe.php');
?>