<!doctype html>
    <?php
        session_start();
        global $db;
        include 'database.php';

        
        //envoyer un message
        //function envoyer_message ($req) {
            //echo $_SESSION['id_corres'];
            echo $_SESSION['message'];
            $datetime = date("Y-m-d");//H:i:s");
            
            $req = $db->prepare("INSERT INTO `chat_et_service`(from_id,to_id,contenu/*,creat_at*/) VALUES(:from_id,:to_id,:contenu/*,:creat_at*/)");
            $req->execute([    
            'from_id' => $_SESSION['id_user'],
            'to_id' => $_SESSION['id_corres'],
            'contenu' => $_SESSION['message']/*,
            'creat_at' => $datetime*/
            ]);
            //session_unset ();
            //}
        ?>
    