<?php
        session_start();
        global $db;
        include 'database.php';

        //envoyer un message
            echo $_SESSION['message'];
            $datetime = date("Y-m-d");//H:i:s");
            
            $req = $db->prepare("INSERT INTO `message_groupe`(groupe,contenu/*,creat_at*/,coach) VALUES(:groupe,:contenu/*,:creat_at*/,:coach)");
            $req->execute([    
            'coach' => $_SESSION['num_coach'],
            'groupe' => $_SESSION['id_groupe'],
            'contenu' => $_SESSION['message']/*,
            'creat_at' => $datetime*/
            ]);
            header('Location: ../vue/html/message_groupe_coach.php');
            //session_unset ();
            exit;
            //}
?>