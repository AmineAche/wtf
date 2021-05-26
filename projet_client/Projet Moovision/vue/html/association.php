<!DOCTYPE html>
<?php
       session_start();

       if($_SESSION['role'] != "1") {
        header('Location: ../../index.php');
       }
       include '../../controleur/utilisateurs.php';
       global $result;
?>
<html>
  <head>
    <title>MOOVISION</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" href="../css/assop.css" />
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
          <a href="notrehistoire.php" class="lien-barre">NOTRE HISTOIRE</a>
        </li>
        <li class="choix-barre">
          <a href="decouvrezmoovision.php" class="lien-barre"
            >DÉCOUVREZ MOOVISION</a
          >
        </li>
        <li class="choix-barre">
          <a href="Contacteznous.php" class="lien-barre">CONTACT</a>
        </li>
        <li class="choix-barre">
          <a href="precommandez.php" class="lien-barre">PRÉ-COMMANDEZ</a>
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

<body>
<div class="preco"><h1>Membres d'Association - Liste des Utilisateurs Certifés </h1>
</div>

<table class="tableautotal">
   <tr class="ligne">
       <th class="titrelarge">ID</th>
       <th class="titrelarge">Username</th>
       <th class="titrelarge">Prénom</th>
       <th class="titrelarge">Nom</th>
       <th class="titrelarge">Mail</th>
       <th class="titrelarge">Certifié(e)</th>
       <th class="titrelarge">Modifier</th>
   </tr>
    <?php $i=0; foreach($result as $user) {  $i++?>
      <form action="../../controleur/modifier_utilisateur_association.php" method="post">
      <tr class="ligne">
        <td class="cell"><?php echo $user['id']; ?></td>
        <td class="cell"><?php echo $user['username']; ?></td>
        <td class="cell"><?php echo $user['prenom']; ?></td>
        <td class="cell"><?php echo $user['nom']; ?></td>
        <td class="cell"><?php echo $user['mail']; ?></td>
        <input type="hidden" name="id_user" value="<?php echo $user['id']; ?>">
        <?php if($user['certification_handicap'] != 0) {?>
          <td class="cell"><input type="checkbox" id="certif" name="certif" value="1" checked></td>
          <?php } else {?>
        <td class="cell"><input type="checkbox" id="certif" name="certif"></td>
    <?php } ?>
        <td class="cell"><input class="envoie" type="submit" name="go" value="Edit"></td>
        </tr>
        </form>
    <?php } ?>
  </table>
</body>

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