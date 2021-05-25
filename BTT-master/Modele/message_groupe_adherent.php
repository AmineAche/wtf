<?php
        // session_start();
        
        include 'database.php';
        global $db;

        //envoyer un message

        if ($_SESSION['message'] != null) {
            echo $_SESSION['message'];
            $datetime = date("Y-m-d H:i:s");
            
            $req = $db->prepare("INSERT INTO `message_groupe`(from_id,groupe,contenu,create_at) VALUES(:from_id,:groupe,:contenu,:create_at)");
            $req->execute([    
            'from_id' => $_SESSION['id_user'],
            'groupe' => $_SESSION['id_groupe'],
            'contenu' => $_SESSION['message'],
            'create_at' => $datetime
            ]);
        }
?>
    