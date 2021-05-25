<?php
    include '../../Modele/evolution.php';
    global $tab;

    $json = file_get_contents("../../modele/evolution.json");
    $evo = json_decode($json);

    $j = rand(0, 5);
    if ($tab['evolution'] == 'positive') {
        $ta = $evo[0][$j]->{'choix'};
    } elseif ($tab['evolution'] == 'negative') {
        $ta = $evo[1][$j]->{'choix'};
    } elseif ($tab['evolution'] == null) {
        $ta = "Aucun changement à noté, tu as stagné depuis ta dernière visite !";
    }

?>