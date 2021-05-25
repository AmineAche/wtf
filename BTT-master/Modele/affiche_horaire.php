<?php
    session_start();
    
    include 'database.php';
    global $db;
    extract($_SESSION);

    $i=0;
    $today = date("Y-m-d H:i:s", time()+ (1*3600));
    $q = $db->prepare("SELECT reserver FROM horaire WHERE num_client = $num_client");
    $q->execute();
    while($res = $q->fetch()) {
        foreach(array($res) as $key => $val) {
            if ($res['reserver'] > $today) {
                $ta[$i] = $val;
            } else {
                $ta[$i] = null;
            }
        }
        $i++;
    }
?>