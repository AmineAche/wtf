<!doctype html>
    <?php
        session_start(); 

        if($_SESSION['Connecté'] == true) {
            header('Location: ../../index.php');
        }
    ?>
    <head>
        <meta type="content" charset="utf-8" />
        <title>Page de connexion</title>
        <link rel="stylesheet" href="../css/connexion.css">
        <link rel="stylesheet" href="../css/index.css">
    </head>

    <body>
    <header>
        <nav>
            <ul class="barre-menu">
                <li class="logo">
                <a href="../../index.php" class="logo">
                    <div id="logo"></div>
                </a>
                </li>
                <li class="choix-barre">
                <a href="../../index.php" class="lien-barre">ACCUEIL</a>
                </li>
                <li class="choix-barre">
                <a href="./notrehistoire.php" class="lien-barre">NOTRE HISTOIRE</a>
                </li>
                <li class="choix-barre">
                <a href="./decouvrezmoovision.php" class="lien-barre">DÉCOUVREZ MOOVISION</a>
                </li>
                <li class="choix-barre">
                <a href="./Contacteznous.php" class="lien-barre">CONTACT</a>
                </li>

                <li class="choix-barre">
                <a href="./precommandez.php" class="lien-barre">PRÉ-COMMANDEZ</a>
                </li>
                
                <li class="choix-barre">
                    <a href="./connexion.php" class="lien-barre">CONNEXION</a>
                </li>
            </ul>
        </nav>
  </header>
	<div class="container">
		<div class="card_container">
            <h1>Connexion</h1>
            <form class="card" action="../../controleur/connexion.php" method="post">
                <input type="text" name="mail" value="" placeholder="Mail">
                <input type="password" name="mot_de_passe" value="" placeholder="Mot de passe">
                <?php if(isset($_SESSION['erreur'])) {
                    echo ($_SESSION['erreur']);
                }?>
                <input type="submit" name="submit" value="Connexion">
            </form>
            <h2>Vous n'avez pas de compte ?</h2>
            <a href="inscription.php">
                <button class="btn-connect">Inscription</button>
            </a>
        </div>
    </div>
        
        <footer>
            <div class="footer">
            <table width="100%">
                <tr style="text-align:center">
                <td>
                    NOUS JOINDRE
                    <a href="Contacteznous.php"
                    ><button class="footer_button">Contactez-nous</button>
                    </a>
                </td>
                <td>
                    NEWSLETTER
                    <a href="../../index.php"
                    ><button class="footer_button">Je m'inscris</button>
                    </a>
                </td>
                <td>
                    CONDITIONS GÉNÉRALES DE VENTE
                    <a href="CGV.php"><button class="footer_button">CGV</button></a>
                </td>
                </tr>
            </table>
        </footer>
    </body>
</html>