<?php
    session_start();
    include 'database.php';
    global $db;
    extract($_SESSION);

    $q = $db->prepare("SELECT note FROM coach WHERE num_coach = '$coa'");
    $q->execute();
    $coach = $q->fetch();

    $i=0;
    if ($coach['note'] == NULL) {
        $q = $db->prepare("UPDATE coach SET note='$note' WHERE num_coach = '$coa'");
        $q->execute();

        $q = $db->prepare("INSERT INTO note(adherent_num_client,coach_num_coach,note) VALUES(:num_client,:num_coach,:note)");
        $q->execute([
            'num_client' => $num_client,
            'num_coach' => $coa,
            'note' => $note
        ]);
        

        $chemin = 'Location: ../vue/html/note_coach.php';
    } else {
        $q = $db->prepare("DELETE FROM note WHERE coach_num_coach = '$coa' AND adherent_num_client = '$num_client'");
        $q->execute();

        $q = $db->prepare("INSERT INTO note(adherent_num_client,coach_num_coach,note) VALUES(:num_client,:num_coach,:note)");
        $q->execute([
            'num_client' => $num_client,
            'num_coach' => $coa,
            'note' => $note
        ]);

        $q = $db->prepare("SELECT * FROM note WHERE coach_num_coach = '$coa'");
        $q->execute();
        $note = $q->rowcount();

        echo($note);

        $q = $db->prepare("SELECT note FROM note WHERE coach_num_coach = '$coa'");
        $q->execute();
        while($coach = $q->fetch()) {
            $i = $i + $coach['note'];
        }

        $i = $i/$note;

        $q = $db->prepare("UPDATE coach SET note='$i' WHERE num_coach = '$coa'");
        $q->execute();

        $chemin = 'Location: ../vue/html/note_coach.php';
    }
?>