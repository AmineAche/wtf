<?php
    //session_start();

    
    include 'database.php';
    global $db;
    extract($_SESSION);

    $i=0;
    $today = date("Y-m-d H:i:s", time()+ (1*3600));
    $q = $db->prepare("SELECT reserver, adherent.nom, adherent.prenom FROM horaire_coach JOIN adherent ON horaire_coach.num_client = adherent.num_client WHERE coach = $num_coach");
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

        // var_dump($ta);
    }
?>