<!DOCTYPE html>
<?php
    session_start();
    if (empty($_SESSION['erreur'])) {
        $_SESSION['erreur'] = null;
    }
?>
<html>
    <head>
        <title>Page d'abonnement</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#">
    </head>
    <body>
    <table border="2">
        <tr>
            <td>
                <h1>Choisissez votre abonnement</h1>
                <?php
                    echo ($_SESSION['erreur']);
                ?>
                <form action="../../controleur/choisir_un_abonnement.php" method="POST">

                <div class="p">
                    <input type="radio" id="AbonnementChoix1"name="abonnement" value="1">
                    <label for="AbonnementChoix1" checked>Abonnement Classique</label>

                    <input type="radio" id="AbonnementChoix2"name="abonnement" value="2">
                    <label for="AbonnementChoix2">Abonnement Rupture</label>

                    <input type="radio" id="AbonnementChoix3"name="abonnement" value="3">
                    <label for="AbonnementChoix3">Abonnement Strong</label>
                </div>
                <div class="p">
                    <button>Valider</button>
                </div>
                </form>
            </td>
        </tr>
    </table>
    </body>
</html>