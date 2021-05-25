<!doctype html>
    <?php
        // session_start();
        
        include 'database.php';
        global $db;
        
        //envoyer un message
        //function envoyer_message ($req) {
            //echo $_SESSION['id_corres'];
            //echo $_SESSION['message'];
        if ($_SESSION['message'] != null) {
            $datetime = date("Y-m-d H:i:s");
            $req = $db->prepare("INSERT INTO `messagerie_coach_adherent`(from_id,contenu,create_at,coach) VALUES(:from_id,:contenu,:create_at,:coach)");
            $req->execute([    
                'from_id' => $_SESSION['id_user'],
                'coach' => $_SESSION['id_corres'],
                'contenu' => $_SESSION['message'],
                'create_at' => $datetime
            ]);
        }


            // $q = $db->prepare("SELECT * FROM entrainer WHERE Adherent_num_client = :num_client");
            // $q->execute([
            //     'num_client' => $_SESSION['num_client']
            // ]);
            // $result = $q->fetch();

            // $_SESSION['coach'] = $result['prenom'];
            // if ($result['presence'] == 'non') {
            //     $_SESSION['presence'] = 'deconnecter';
            // } else {
            //     $_SESSION['presence'] = 'connecter';
            // }
            //session_unset ();
            //}
        ?>