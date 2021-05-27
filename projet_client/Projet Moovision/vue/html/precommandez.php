<!DOCTYPE html>
<?php 
      if (isset($_SESSION)) {
        session_start();
      }
       include '../../controleur/produits.php';
       global $result;
?>
<html>
  <head>
    <title>MOOVISION</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" href="../css/precommandez.css" />
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
                  <li class="choix-barre">
                    <h1 style="color:#7b12de;">
                    <a href="./profil.php"><?php echo $_SESSION['username']; ?></a></h1>
                  </li>
                  <?php if ($_SESSION['role'] == '2') {?>
                    <li class="choix-barre">
                      <h1 style="color:#7b12de;">
                      <a href="./admin.php">ADMIN</a></h1>
                    </li>
                  <?php   }; if($_SESSION['role'] == '1') {?>
                    <li class="choix-barre">
                      <h1 style="color:#7b12de;">
                      <a href="./association.php">ASSOCIATION</a></h1>
                    </li>
                  <?php }} else { ?>
              <li class="choix-barre">
                  <a href="./connexion.php" class="lien-barre">CONNEXION</a>
              </li>
          <?php } ?>
        </ul>
    </nav>
  </header>

  <div class="preco"><h1>Pré-commandez vos articles Moovision</h1>
  </div>

  <table class="tableautotal">
    <th rowspan="4" class="titrelarge">Produits</th>
    <?php $i=0; foreach($result as $produit) {  $i++?>
      <tr class="ligne">
          <td class="cell">
            <img src="<?php echo $produit['image']; ?>">
            <br>
            <?php echo $produit['Nom'] ?>
          </td>
          <td class="cell large"><?php echo $produit['Prix']; ?></td>
          <td class="cell">
            <input
                  type="text"
                  name="qty1"
                  maxlength="10"
                  value="0"
                  title=""
                  id="qty<?php echo $i?>"
                  class="input-text"/>
            <div class="buttpay" onclick="calculTotal()">
                Ajouter
            </div>
          </td>
      </tr>
    <?php } ?>
    <tr class="ligne">
        <th class="titrelarge">Livraison</th>
        <td colspan="3" class="cell">10€ de livraison</td>
    </tr>
    <?php if(isset($_SESSION['salaire']) && $_SESSION['salaire'] != null && $_SESSION['salaire']== "1") { ?>
      <tr class="ligne">
        <th class="titrelarge" id="reduc">Réduction</th>
        <td colspan="3" class="cell">10%</td>
    </tr>
    <?php } ?>
    <tr>
        <th class="titrelarge">Total</th>
        <td colspan="3" class="cell"><span id="total"></td>
    </tr class="ligne">
  </table>

  <?php if(empty($_POST['total']) && isset($_SESSION['erreurprix'])) {
      echo $_SESSION['erreurprix']; } ?>
  <?php if(isset($_SESSION['erreur_commande'])) {
      echo ($_SESSION['erreur_commande']);
  }?>

  <form action="../../controleur/commande.php" method="post">
    <input id="prix" type="hidden" name="total" value="">
    <input id="quantite" type="hidden" name="quantite" value="">
  <?php
      if (isset($_SESSION['Connecté']) && $_SESSION['Connecté'] == true && ($_SESSION['handicap_user']) == "1") { ?>
          <button name="button" input="submit" class="buttonvalid">VALIDEZ</button></form>
  <?php   } else { ?>
      <p style="text-align:center; font-size: 25px">Vous devez être <?php if((isset($_SESSION['handicap_user']) && ($_SESSION['handicap_user'] != "1"))) { 
        echo "certifié";} else {echo "connecté";} ?> afin de valider un panier !</p>
  <?php } ?>

      </div>
  <br> 
  <br>
  <br>
  <br> 
  <br>
  <br>


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
            <a href="CGV.php"
              ><button class="footer_button">CGV</button></a
            >
          </td>
        </tr>
      </table>
    </div>
  </footer>


<script type="text/javascript" src="../javascript/precommandez.js"></script>
