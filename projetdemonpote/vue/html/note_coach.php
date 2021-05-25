<!DOCTYPE html>
<?php
    include '../../Controleur/affiche_coach.php';
    global $ta;
?>
<head>
    <meta charset="UTF-8">
    <title>Notez vos coachs</title>
</head>
<body>
<?php
    for ($i=0; $i < count($ta); $i++) { 
        if ($ta[$i][0]['note'] != null) { 
            echo ("<p>".$ta[$i][0]['prenom'].": ".$ta[$i][0]['note']."</p><br>");
        } else {
            echo ("<p>".$ta[$i][0]['prenom']."</p><br>");
        }
        echo ("<form action='../../controleur/note_coach.php' method='POST'>
            Donnez une note au coach : <select name='note'>
                <optgroup label='note'>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                </select>
            <input type='hidden' name='coach' value='".$ta[$i][0]['num_coach']."'>   
            <input type='submit' name='go' value='Validez'>
        </form>");
    }
?>
<a href="../../controleur/retour.php">Retour</a>
    
</body>
</html>