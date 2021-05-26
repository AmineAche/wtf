<!DOCTYPE html>
<?php
       session_start();
?>
<html>
  <head>
    <title>MOOVISION</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" href="../css/youdidit.css" />
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


<div class="gif"><img src="https://media.giphy.com/media/h2CbU9bZKia9w1T5UQ/giphy.gif">

<h1>YOU DID IT ! Félicitation de vous être lancé dans le monde Moovision ! Nous vous remercions pour votre confiance.</h1>

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
            <a href="CGV.php"
              ><button class="footer_button">CGV</button></a
            >
          </td>
        </tr>
      </table>
    </div>
  </footer>