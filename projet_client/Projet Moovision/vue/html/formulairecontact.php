<!DOCTYPE html>
<?php
       session_start();
?>
<html>
  <head>
    <title>MOOVISION</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" href="../css/formulairecontact.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Roboto:wght@100;300;400&display=swap"
      rel="stylesheet"

    />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">


  
  </head>
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
                  <li class="choix-barre"><h1 style="color:#7b12de;"><?php echo ($_SESSION['user']); ?></h1><li>
          <?php   } else { ?>
              <li class="choix-barre">
                  <a href="../html/inscription.php" class="lien-barre">INSCRIPTION</a>
              </li>
          <?php } ?>
        </ul>
    </nav>
  </header>

<body>
</br>
<div class="Contactprinc">
		<div class="contact1">

    <form class="ben" action="../../controleur/formulairecontact.php" method="post">
                <span class="Titre">
                    Nous contacter
                </span>
                <p>Les champs avec <span class="rouge"> *</span> sont obligatoires.</p>
        <?php if (isset($_SESSION['Connecté']) && $_SESSION['Connecté'] == true) { ?>
          <label class="label-clara" for="message">Que voulez vous ? <span class="rouge"> *</span></label>
                <div class="wrap-clara">
                    <textarea id="message" class="clara" name="message" placeholder="Ecrivez votre commentaire"></textarea>
                </div>
          <?php   } else { ?>
                <label class="label-clara" >Votre Nom et Prénom<span class="rouge"> *</span></label>
                <div class="wrap-clara ">
                    <input class="clara" type="text" name="nom" required="requis" placeholder="Nom de famille">
                </div>
                <div class="wrap-clara">
                    <input class="clara" type="text" name="prenom" placeholder="Prénom">
                </div>

                <label class="label-clara" for="email">Adresse e-mail <span class="rouge"> *</span></label>
                <div class="wrap-clara">
                    <input id="email" class="clara" type="email" required="requis" name="email" placeholder="Moovision@gmail.com">
                </div>

                <label class="label-clara" for="tel">Numéro de téléphone</label>
                <div class="wrap-clara">
                    <input id="tel" class="clara" type="text" name="tel" placeholder="0656543454">
                </div>

                <label class="label-clara" for="message">Que voulez vous ? <span class="rouge"> *</span></label>
                <div class="wrap-clara">
                    <textarea id="message" class="clara" name="message" placeholder="Ecrivez votre commentaire"></textarea>
                </div>
        <?php   } ?>
                <div class="container-ben-btn">
                    <button type="submit"  name="go" class="ben-btn">
                        <span>
                            Envoyer
                        </span>
                    </button>
                </div>
            </form>
		</div>
	</div>
</body>


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
            <a href="CGV.php"
              ><button class="footer_button">CGV</button></a
            >
          </td>
        </tr>
      </table>
    </div>
  </footer>