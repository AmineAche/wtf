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
            
            $req = $db->prepare("INSERT INTO `messagerie_coach`(from_id,to_id,contenu/*,creat_at*/) VALUES(:from_id,:to_id,:contenu/*,:creat_at*/)");
            $req->execute([    
            'from_id' => $_SESSION['num_coach'],
            'to_id' => $_SESSION['id_corres'],
            'contenu' => $_SESSION['message']/*,
            'creat_at' => $datetime*/
            ]);
            header('Location: ../vue/html/message_c_and_c.php');
            //session_unset ();
            exit;
            //}
        ?>