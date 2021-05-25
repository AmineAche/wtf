<!DOCTYPE html>
<?php
    session_start();
    include 'database.php';
    global $db;
    extract($_SESSION);

    $i=1;
    $j=1;

    foreach ($_SESSION['tab'] as $key => $val) {
        $q = $db->prepare("SELECT entrainement_maison FROM preference WHERE entrainement_maison = $key AND num_client = $num_client");
        $q->execute();
        $preference = $q->rowcount();

        echo"$key et $val et $preference<br>";
        if ($preference == 0) {
            $q = $db->prepare("INSERT INTO preference(entrainement_maison,num_client,pref) VALUES(:entrainement_maison,:num_client,:pref)");
            $q->execute([
                'entrainement_maison' => $key,
                'num_client' => $_SESSION['num_client'],
                'pref' => 0
            ]);
        } elseif ($preference != 0) {
            $q = $db->prepare("SELECT pref FROM preference WHERE entrainement_maison = $key AND num_client = $num_client");
            $q->execute();
            $preference = $q->fetch();
            
            $j = $preference['pref']+1;

            $q = $db->prepare("UPDATE preference SET pref = $j WHERE entrainement_maison = :entrainement AND num_client = :num");
            $q->execute([
                'entrainement' => $key,
                'num' => $_SESSION['num_client']
            ]);
        }
    }

    $tab = [];
    $q = $db->prepare("SELECT entrainement_maison.type_session, entrainement_maison.id_entrainement FROM preference JOIN entrainement_maison ON preference.entrainement_maison = entrainement_maison.id_entrainement WHERE preference.num_client = $num_client ORDER BY pref DESC");
    $q->execute();
    while($result = $q->fetch()) {
        foreach ($_SESSION['tab'] as $key => $val) {
            if ($key == $result['id_entrainement']) {
                $tab[$i] = $result['type_session'];
            }
        }
        $i++;
    }

    

    var_dump($_SESSION['tab'] = $tab);

    $chemin = 'Location: ../vue/html/affiche_video.php';     
?>
