<!doctype html>
    <?php
        session_start(); 

        if($_SESSION['Connecté'] == false) {
            header('Location: ../../index.php');
        }
    ?>
    <head>
        <meta type="content" charset="utf-8" />
        <title>Page Profil</title>
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
                        <li class="choix-barre"><h1 style="color:#7b12de;"><a href="profil.php"><?php echo ($_SESSION['username']); ?></a></h1><li>
                 <?php   } ?>
            </ul>
        </nav>
  </header>
	<div class="container">
		<div class="card_container">
            <h1 style='font-size: 50px;'>PROFIL</h1>
            <h1 style='font-size: 30px;'>Username: </h1> <h1><?php echo ($_SESSION['username']); ?></h1>
            <h1 style='font-size: 30px;'>Prenom: <?php echo ($_SESSION['prenom']); ?></h1>
            <h1 style='font-size: 30px;'>Nom: <?php echo ($_SESSION['nom']); ?></h1>
            <h1 style='font-size: 30px;'>Mail: <?php echo ($_SESSION['mail']); ?></h1>
            <h1 style='font-size: 30px;'>Telephone: <?php echo ($_SESSION['telephone']); ?></h1>
            <h1 style='font-size: 30px;'>Adresse: <?php echo ($_SESSION['adresse']); ?></h1>
            <h1 style='font-size: 30px;'>Localite: <?php echo ($_SESSION['localite']); ?></h1>
            <h1 style='font-size: 30px;'>Salaire: <?php echo ($_SESSION['salaire']); ?></h1>
            <a href="../../controleur/deconnexion.php">
                <button class="btn-connect">Deconnexion</button>
            </a>
            </form>
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