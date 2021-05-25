<<!doctype html>
    <?php
        session_start();
        global $db;
        include 'database.php';

        
        //envoyer un message
        //function envoyer_message ($req) {
            //echo $_SESSION['id_corres'];
            echo $_SESSION['message'];
            $datetime = date("Y-m-d");//H:i:s");
            echo $_SESSION['id_corres']."<br>";
            echo $_SESSION['id_user'];
            $req = $db->prepare("INSERT INTO `messagerie_coach_adherent`(to_id,contenu/*,create_at*/,coach) VALUES(:to_id,:contenu/*,:create_at*/,:coach)");
            $req->execute([     
            'to_id' => $_SESSION['id_corres'],
            'contenu' => $_SESSION['message'],
            'coach' => $_SESSION['id_user']/*,
            'creat_at' => $datetime*/
            ]);
            header('Location: ../vue/html/message_coach_adherent.php');
            //session_unset ();
            exit;
            //}
        ?>