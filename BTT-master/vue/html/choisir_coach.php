<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <title>Choisir un coach</title>
    <link rel="stylesheet" href="../css/inscrire.css">
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

?>
    <a href="../../controleur/retour.php"><p>Retour</p></a>

</body>
</html>