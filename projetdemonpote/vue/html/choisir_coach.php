<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <title>Choisir un coach</title>
</head>
<body>
<?php
    include '../../modele/choix_coach.php';
    global $coach;
    if (empty($_SESSION['errer'])) {
        $_SESSION['errer'] = null;
    }

    extract($_SESSION);
    // if ($num_coach == 1) {
        echo "Choisir un coach:</br>";
        echo "<p>Sur cette page on vous propose un coach selon des parties du corps que vous-voulez travailler, séparer en catégories. Les catégories dispensées par notre club sont:</br>- Full body (full_body)</br>- Abdos (abdos)</br>- Dos (dos)</br>- Jambes (jambes)</br>- Bras (bras)</br>- Pecs (pecs)</br>- Epaules (epaules)</p>
        <form action='../../controleur/choisir_coach.php' method='POST'>
                Catégories : <select name='categories'>
                            <optgroup label='categories'>
                                <option value='full_body'>full body</option>
                                <option value='abdos'>abdos</option>
                                <option value='dos'>dos</option>
                                <option value='jambes'>jambes</option>
                                <option value='bras'>bras</option>
                                <option value='pecs'>pecs</option>
                                <option value='epaules'>épaules</option>";

                echo ($_SESSION['errer']."<br><br>");
            echo"<input type='submit' name='go' value='Validez'>
        </form>";
    // } else {
        // include '../../Controleur/message_coach.php';
        // echo "Coach: ". $coach ."</br>";
        // echo "Bientôt en relation<br>";
        //     if(isset($_POST['go'])) {
        //         $nom = explode( ' ', $_POST['go']);
        //         $_SESSION['corres'] = $_POST['go'];
        //         $_SESSION['m.corres'] = $_POST['mail'];
        //         }
    
        //         echo "<h3>Conversation avec : ".$coach."</h3>";
                
        //         $message = afficher_message();
        //         for ($i=0; $i < count($message); $i++) {
        //             echo ($message[$i]);
        //         }
            
        // echo ($_SESSION['errer']."<br><br>");
        // if(isset($_POST['go'])) {
        //     $nom = explode( ' ', $_POST['go']);
        //     $_SESSION['corres'] = $_POST['go'];
        //     $_SESSION['m.corres'] = $_POST['mail'];
        //     }

        //     echo"<h3>Conersation avec : ".$_SESSION['corres']."</h3>";
            
        //     $message = afficher_message();
        //     for ($i=0; $i < count($message); $i++) {
        //         echo ($message[$i]);
        //     }
        // echo "<form action='../../Controleur/message_coach.php' method='POST'>
        //     <textarea name='message' rows='8' cols='80'></textarea><p>
        //     <input type='submit' name='Envoyez' value='Envoyez'>
        //     </form>";

        // echo "<form action='choisir_coach.php' method='POST'>
        //     <input type='submit' name='allez' value='Actualiser'>
        //     </form>";
    //     echo "<form action='../../Controleur/message_coach.php' method='POST'>
    //         <textarea name='message' rows='8' cols='80'></textarea><p>
    //         <input type='submit' name='Envoyez' value='Envoyez'>
    //     </form>

    //     <form action='choisir_coach.php' method='POST'>
    //         <input type='submit' name='allez' value='Actualiser'>
    //     </form>";
    //     echo "<a href='http://localhost/Projets/BTT/controleur/choisir_coach.php?res=oui'>Résilier</a><br>";
    // }
?>
    <a href="../../controleur/retour.php">Retour</a>

</body>
</html>