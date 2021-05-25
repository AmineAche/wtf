<?php
        // session_start();
        
        include 'database.php';
        global $db;

        //envoyer un message
        if ($_SESSION['message'] != null) {
            echo $_SESSION['message'];
            $datetime = date("Y-m-d H:i:s");
            
            $req = $db->prepare("INSERT INTO `message_groupe`(groupe,contenu,creat_at,coach) VALUES(:groupe,:contenu,:create_at,:coach)");
            $req->execute([    
                'coach' => $_SESSION['num_coach'],
                'groupe' => $_SESSION['id_groupe'],
                'contenu' => $_SESSION['message'],
                'create_at' => $datetime
            ]);
            
        }
?>