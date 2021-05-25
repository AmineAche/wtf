<!doctype html>
    <?php
        session_start();  
    ?>
    <head>
        <meta type="content" charset="utf-8" />
        <title>Page d'inscription</title>
        <link rel="stylesheet" href="../css/inscription.css">
        <link rel="stylesheet" href="../css/index.css">
    </head>

    <body>
	    <?php
            
            if (empty($_SESSION['erreur'])) {
                    $_SESSION['erreur'] = null;
                }
            if (empty($_SESSION['error'])) {
                $_SESSION['error'] = null;
            }
            if (empty($_SESSION['erreurmail'])) {
                $_SESSION['erreurmail'] = null;
            }
        ?>
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
            <h1>Inscription</h1>
            <form class="card" action="../../controleur/inscription.php" method="post">
                <input type="text" name="username" value="" placeholder="Votre username">
                <input type="text" name="prenom" value="" placeholder="Votre prénom">
                <input type="text" name="nom" value="" placeholder="Votre nom">
                <input type="text" name="mail" value="" placeholder="Votre mail">
                <input type="password" name="mot_de_passe" value="" placeholder="Votre Mot de passe">
                <input type="password" name="cmot_de_passe" value="" placeholder="Confirmez votre Mot de passe">
                <input type="tel" name="telephone" value="" placeholder="Votre numéro de téléphone">
                <input type="text" name="adresse" value="" placeholder="Votre adresse">
                <input type="text" name="localite" value="" placeholder="Votre ville">
                <input type="text" name="salaire" value="" placeholder="Tranche de votre salaire">
                <input type="text" name="handicap" value="" placeholder="Votre certification d'handicap">
                <input type="submit" name="go" value="S'inscrire">
            </form>
            <h2>Vous avez déjà un compte ?</h2>
            <a href="connexion.php">
                <button class="btn-connect">Connexion</button>
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
                    <a href="../../index.php"><button class="footer_button">Je m'inscris</button>
                    </a>
                </td>
                <td>
                    CONDITIONS GÉNÉRALES DE VENTE
                    <a href="CGV.php"
                    ><button class="footer_button">CGV</button></a
                    >
                </td>
                </tr>
            </table>
        </footer>
    </body>
</html>