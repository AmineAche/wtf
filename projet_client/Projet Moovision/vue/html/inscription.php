<!doctype html>
    <?php
        session_start();
        
        if($_SESSION['Connecté'] == true) {
            header('Location: ../../index.php');
        }
    ?>
    <head>
        <meta type="content" charset="utf-8" />
        <title>Page d'inscription</title>
        <link rel="stylesheet" href="../css/inscription.css">
        <link rel="stylesheet" href="../css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
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
                <a href="./notrehistoire.php" class="lien-barre">NOTRE HISTOIRE</a>
                </li>
                <li class="choix-barre">
                <a href="./decouvrezmoovision.php" class="lien-barre"
                    >DÉCOUVREZ MOOVISION</a
                >
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
            <div class="inscr">
                Inscription
            </div>
            <form class="card" action="../../controleur/inscription.php" method="post">
                <label class="label-clara" >Vos Username, Nom et Prénom</label>
                <div class="wrap-clara ">
                <input class="input" type="text" name="username" value="" placeholder="Username">
                <input class="input" type="text" name="prenom" value="" placeholder="Prénom">
                <input class="input" type="text" name="nom" value="" placeholder="Nom">
                </div>
                <label class="label-clara" >Votre Mail</label>
                <div class="wrap-clara ">
                <input class="input" type="text" name="mail" value="" placeholder="Mail">
                </div>
                <?php
                    echo ($_SESSION['erreurmail']);
                ?>
                <label class="label-clara" >Votre Mot de Passe</label>
                <div class="wrap-clara ">
                <input class="input" type="password" name="mot_de_passe" value="" placeholder="Mot de passe">
                <input class="input" type="password" name="cmot_de_passe" value="" placeholder="Confirmez votre Mot de passe">
                </div>
                <label class="label-clara" >Votre Numéro de téléphone</label>
                <div class="wrap-clara ">
                <input class="input" type="tel" name="telephone" value="" placeholder="Numéro de téléphone">
                </div>
                <label class="label-clara" >Votre Adresse et Ville</label>
                <div class="wrap-clara ">
                <input class="input" type="text" name="adresse" value="" placeholder="Adresse">
                <input class="input" type="text" name="localite" value="" placeholder="Ville">
            </div>
                
                <label class="label-clara" >Votre tranche de salaire (Afin de bénéficier d'une réduction)</label>
                <div class="bout">
                <input class="input2" type="radio" name="salaire" value="0" checked>
                <label for=">50K">> 50K euros / ans</label>
                </div>
                <div class="bout">
                <input class="input2" type="radio" name="salaire" value="1">
                <label for="<50K">< 50K euros / ans</label>
                </div>
                <?php 
                        echo ($_SESSION['error']);
                        echo ($_SESSION['erreur']);
                    ?>
                <input class="input"type="submit" name="go" value="S'inscrire">
            </form>
            <div class="vadc">Vous avez déjà un compte ?</div>
            <a href="connexion.php">
                <button class="btn-connect">Connexion</button>
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