<?php
    session_start();
    $_SESSION['note'] = $_POST['note'];
    $_SESSION['coa'] = $_POST['coach'];

    include '../modele/note_coach.php';
    global $chemin;
    header($chemin);
    exit;
?>