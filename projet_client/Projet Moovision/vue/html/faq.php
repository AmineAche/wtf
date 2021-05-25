<!DOCTYPE html>
<?php
       session_start();
?>
<html>
  <head>
    <title>MOOVISION</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" href="../css/faq.css" />
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
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
                  <li class="choix-barre"><h1 style="color:#7b12de;"><?php echo ($_SESSION['username']); ?></h1><li>
          <?php   } else { ?>
              <li class="choix-barre">
                  <a href="../html/inscription.php" class="lien-barre">INSCRIPTION</a>
              </li>
          <?php } ?>
        </ul>
    </nav>
  </header>


<body>
 
<div class="qstcourantes">
 
  <h2>Questions les plus courantes</h2>
 
  <div class="question">
    <div class="question-item">
      <a>Mon Moovision n'exerce plus de pression.</a>
      <div class="content">
        <p>Ce problème arrive lorsque le gant est mal placé sur la main. Tentez de le replacer au milieu de votre main. Contactez-nous si le problème persiste.</p>
      </div>
    </div>
    <div class="question-item">
      <a>Comment redémarrer mon Moovision ?</a>
      <div class="content">
        <p>Pour redémarrer votre gant, effectuez une pression continue pendant 10 secondes sur le bouton au niveau du pouce, le gant effectuera un signal sonore et redémarrera.</p>
      </div>
    </div>
    <div class="question-item">
      <a>Quel est le processus d'achat de Moovision ?</a>
      <div class="content">
        <p>Une fois acheté, un conseiller de Moovision viendra vous livrer votre appareil, de sorte qu'il l'adapte à vous, et qu'il vous explique toutes les options du gant. </p>
      </div>
    </div>
    <div class="question-item">
      <a>Le gant Moovision est-il garanti ?</a>
      <div class="content">
        <p>Nous garantissons tous nos modèles 1 an. Au delà, les réparations seront à vos frais.</p>
      </div>
    </div>
    <div class="question-item">
      <a>Mon gant sonne en continue que faire ?</a>
      <div class="content">
        <p>Contactez-nous directement via le formulaire en ligne, nous vous répondrons dans les plus brefs délais.</p>
      </div>
    </div>

  </div>
  
</div>
 

<script  src="../javascript/faq.js"></script>
 
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