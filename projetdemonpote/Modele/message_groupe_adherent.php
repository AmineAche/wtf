<?php
        session_start();
        global $db;
        include 'database.php';

        //envoyer un message
            echo $_SESSION['message'];
            $datetime = date("Y-m-d");//H:i:s");
            
            $req = $db->prepare("INSERT INTO `message_groupe`(from_id,groupe,contenu/*,creat_at*/) VALUES(:from_id,:groupe,:contenu/*,:creat_at*/)");
            $req->execute([    
            'from_id' => $_SESSION['id_user'],
            'groupe' => $_SESSION['id_groupe'],
            'contenu' => $_SESSION['message']/*,
            'creat_at' => $datetime*/
            ]);
            header('Location: ../vue/html/message_groupe_adherent.php');
            //session_unset ();
            exit;
            //}
?>
    