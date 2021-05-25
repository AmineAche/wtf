<!DOCTYPE html>
<?php
       session_start();
?>
<html>
  <head>
    <title>MOOVISION</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" href="../css/decouvrezmoovision.css" />
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

<div class="pres">
  <ul class="boites">
    <li>Détection des obstacles à l'aide de la technologie des ondes sonores - pression sur la main à l'approche d'un obstacle.</li>
    <li>Application mobile avec géolocalisation et itinéraire.</li>
    <li>Réseaux de transport (RATP) accessibles aux personnes malvoyantes depuis l'application</li>
  </ul>
</div>

<div class="parag1">
<ul class="descrgant">
  <li>Nous avons créé un gant qui permet de <b>détecter les obstacles</b> grâce à la technologie des <b>ondes sonores</b> et faciliter ainsi le déplacement des mal-voyants.</li>
  <br>

  <li>Ce gant se dépose sur le haut de la main, et y effectue des <b>pressions</b> à l'approche d'obstacles.</li>
  <br>

  <li>Plus la <b>distance</b> qui sépare le mal-voyant de l’obstacle est faible, plus les <b>pressions</b> sur la main seront rapides. Le mal-voyant se voit averti de son rapprochement au danger.</li>
  <br>

  <li>Un <b>émetteur</b> sur le gant envoie une onde ultrasonore qui sera renvoyée vers le <b>récepteur</b> du sonar portatif lors du contact avec l’obstacle.</li>
  <br>

  <li>L’information est ensuite traitée par la <b>carte mère</b> qui va, en fonction de la <b>vitesse de l'onde</b> ainsi que de la distance, envoyer un ordre <b>d’exercer une pression</b> sur la main de l’utilisateur plus ou moins rapide.</li>
</ul>
<img class="bonhomme" src="../images/bonhomme.png">
</div>

<div class="parag2">

  <img class="dame" src="../images/moovision.png">

  <div class="descrappli">
  <h3>Nous développons actuellement une version plus connectée, sous forme d'application à télécharger sur votre Smartphone.</h3>
  <br>
  <ul>
  
    <li><b>Service de géolocalisation</b>, pour une sécurité augmentée: contact urgent des proches en cas d'accident.</li>
    <br>

    <li><b>Itinéraires appropriés</b>, allez d'un point à un autre en toute sécurité.</li>
    <br>

    <li><b>Information sur les transports en commun</b> accessibles en temps réel.</li>

  </ul>
  </div>
</div>
<br>

<div class="video">
  <video controls poster="sintel.jpg" width="600" class="vid">
    <source src="SITE.mp4">
  </video>
  <p>Voici une vidéo explicative du fonctionnement de Moovision.</p>

</div>

<section class="fondtransp2">
    <div class="savoirplus">
       <p>Vous voulez en savoir plus</p> 
       <br>
       <a href="formulairecontact.php" class="button2">CONTACTEZ-NOUS</a> 

    </div>
  </section>


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