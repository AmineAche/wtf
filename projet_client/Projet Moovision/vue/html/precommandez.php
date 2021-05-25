<!DOCTYPE html>
<?php
       session_start();
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
                  <li class="choix-barre"><h1 style="color:#7b12de;"><?php echo ($_SESSION['username']); ?></h1><li>
          <?php   } else { ?>
              <li class="choix-barre">
                  <a href="../html/inscription.php" class="lien-barre">INSCRIPTION</a>
              </li>
          <?php } ?>
        </ul>
    </nav>
  </header>

<div class="preco"><h1>Pré-commandez vos articles Moovision</h1>
</div>

<table class="tableautotal">
   <tr class="ligne">
       <th rowspan="3" class="titrelarge">Produits</th>
       <td class="cell">
        <img src="../images/gant.png">
        <br>
        Gant Moovision
      </td>
       <td class="cell large">100€</td>
       <td class="cell">
        <input
              type="text"
              name="qty1"
              maxlength="10"
              value="0"
              title=""
              id="qty1"
              class="input-text"
              disabled
            />
            <div class="qty_inc_dec">
              <i class="increment" onclick="incrementQty1()">+</i>
              <i class="decrement" onclick="decrementQty1()">-</i>
            </div>

                          <div class="buttpay" onclick="calculTotal()">
             Ajouter

            </div>
          </td>
   </tr>
   <tr class="ligne">
       <td class="cell">
        <img src="../images/housse.jpg"><br>
        Housse de protection gant Moovision
      </td>
       <td class="cell large">20€</td>
       <td class="cell"><input
              type="text"
              name="qty2"
              maxlength="10"
              value="0"
              title=""
              class="input-text"
              id="qty2"
              disabled
            />
            <div class="qty_inc_dec">
              <i class="increment" onclick="incrementQty2()">+</i>
              <i class="decrement" onclick="decrementQty2()">-</i>
            </div>
                <div class="buttpay" onclick="calculTotal()">
             Ajouter

            </div>
         </td>
   </tr>
   <tr class="ligne">
       <td class="cell">
        <img src="../images/charger.png"><br>
        Chargeur de gant Moovision
      </td>
       <td class="cell large">8.50€</td>
       <td class="cell"><input
              type="text"
              name="qty3"
              id="qty3"
              maxlength="10"
              value="0"
              title=""
              class="input-text"
              disabled
            />
            <div class="qty_inc_dec">
              <i class="increment" onclick="incrementQty3()">+</i>
              <i class="decrement" onclick="decrementQty3()">-</i>
            </div>
                <div class="buttpay" onclick="calculTotal()">
             Ajouter

            </div>

         </td>
   </tr>
   <tr class="ligne">
       <th class="titrelarge">Livraison</th>
       <td colspan="3" class="cell">10€ de livraison</td>
   </tr>
   <tr>
       <th class="titrelarge">Total</th>
       <td colspan="3" class="cell"><span id="total"></td>
   </tr class="ligne">
</table>

<?php
    if (isset($_SESSION['Connecté']) && $_SESSION['Connecté'] == true) { ?>
        <a href="youdidit.php" class="buttonvalid">VALIDEZ</a>
<?php   } else { ?>
    <p style="text-align:center; font-size: 25px">Vous devez être connecté afin de valider un panier !</p>
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


<script type="text/javascript" src="../javascript/precommandez.js"></script>
