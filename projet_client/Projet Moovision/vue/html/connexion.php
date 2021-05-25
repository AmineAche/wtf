<!doctype html>
    <?php
        session_start(); 
    ?>
    <head>
        <meta type="content" charset="utf-8" />
        <title>Page de connexion</title>
        <link rel="stylesheet" href="../css/inscription.css">
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
                <a href="../html/notrehistoire.php" class="lien-barre">NOTRE HISTOIRE</a>
                </li>
                <li class="choix-barre">
                <a href="../html/decouvrezmoovision.php" class="lien-barre"
                    >DÉCOUVREZ MOOVISION</a
                >
                </li>
                <li class="choix-barre">
                <a href="../html/Contacteznous.php" class="lien-barre">CONTACT</a>
                </li>
                <li class="choix-barre">
                <a href="../html/precommandez.php" class="lien-barre">PRÉ-COMMANDEZ</a>
                </li>
                <?php
                    if (isset($_SESSION['Connecté']) && $_SESSION['Connecté'] == true) { ?>
                        <li class="choix-barre"><h1 style="color:#7b12de;"><?php echo ($_SESSION['username']); ?></h1><li>
                 <?php   } else { ?>
                    <li class="choix-barre">
                        <a href="../html/inscription.php" class="lien-barre">INSCRIPTION</a>
                    </li>
                 <?php } ?>
            </ul>
        </nav>
  </header>
	<div class="container">
		<div class="card_container">
            <h1>Connexion</h1>
            <form class="card" action="../../controleur/connexion.php" method="post">
                <input type="text" name="mail" value="" placeholder="Mail">
                <input type="password" name="mot_de_passe" value="" placeholder="Mot de passe">
                <?php 
                    echo ($_SESSION['erreur']);
                ?>
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
                <tr style="align-content:center">
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