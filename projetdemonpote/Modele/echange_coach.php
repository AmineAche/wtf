    <?php
        session_start();
            
        //recuperer les users
        function index () {
            global $db;
            $users = $db->prepare("SELECT * FROM `coach`  Where num_coach != :num_coach AND num_coach != '1'");
            $users->execute([
                'num_coach' => $_SESSION['num_coach']
            ]);
                
            $u = "";
            while ($donnees =  $users->fetch()){
                $u .= "<form action='./message_c_and_c.php' method='POST'><input type='submit' name='go' value='".$donnees['prenom']." ".$donnees['nom']."'><input type='hidden' name='id' value='".$donnees['num_coach']."'></form><br>";
            }
            return $u;
        }
    ?>