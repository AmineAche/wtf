<?php
    session_start();

    include 'database.php';
    global $db;
    extract($_SESSION);

    $i=0;
    $q = $db->prepare("SELECT prenom, num_coach, note FROM coach WHERE num_coach != '1'");
    $q->execute();
    while($coach = $q->fetch()) {
        foreach(array($coach) as $key => $val) {
            $ta[$i][$key] = $val;
        }
        $i++;
    }
?>