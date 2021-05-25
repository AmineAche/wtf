<!DOCTYPE html>
  <?php
       session_start();
  ?>
  <html>
  <head>
    <title>MOOVISION</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="./vue/css/index.css" />
    <link rel="stylesheet" type="text/css" href="./vue/css/newsletter.css" />
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

    <script>function inscrip()

          {var email=document.getElementById("news").value; 
          
          if (email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
          {
              alert("Merci pour votre inscription à notre newletter, vous pourrez maintenant suivre l'actualité sur Moovision !");
          }

          else

          {
              alert("Votre adresse mail n'est pas valide");
          }
          }
           </script>

  </head>
  <header>
    <nav>
    <ul class="barre-menu">
          <li class="logo">
          <a href="index.php" class="logo">
              <div id="logo"></div>
          </a>
          </li>
          <li class="choix-barre">
          <a href="index.php" class="lien-barre">ACCUEIL</a>
          </li>
          <li class="choix-barre">
          <a href="./vue/html/notrehistoire.php" class="lien-barre">NOTRE HISTOIRE</a>
          </li>
          <li class="choix-barre">
          <a href="./vue/html/decouvrezmoovision.php" class="lien-barre"
              >DÉCOUVREZ MOOVISION</a
          >
          </li>
          <li class="choix-barre">
          <a href="./vue/html/Contacteznous.php" class="lien-barre">CONTACT</a>
          </li>
          <li class="choix-barre">
          <a href="./vue/html/precommandez.php" class="lien-barre">PRÉ-COMMANDEZ</a>
          </li>
          <?php
              if (isset($_SESSION['Connecté']) && $_SESSION['Connecté'] == true) { ?>
                  <li class="choix-barre"><h1 style="color:#7b12de;"><?php echo ($_SESSION['username']); ?></h1><li>
          <?php   } else { ?>
              <li class="choix-barre">
                  <a href="./vue/html/inscription.php" class="lien-barre">INSCRIPTION</a>
              </li>
          <?php } ?>
        </ul>
    </nav>
  </header>

  <section class="grande-section">
    <div class="message-accueil">
      <h1 class="titre">PLUS DE FRONTIÈRE, PLUS DE LIMITE</h1>
      <p>
        Grâce à la technologie <b>Moovision</b>, déplacez vous en toute
        sécurité. Notre <b>mission</b>: permettre aux personnes malvoyantes de
        retrouver leur liberté.
      </p>
      <a href="./vue/html/precommandez.php" class="button">PRÉ-COMMANDEZ</a>   

    </div>
    
  </section>


    <body>

    <section class="fondtransp">
    <div class="newsletter">
       <p> Recevez toutes nos actualités en temps réel, abonnez vous à notre <b>newsletter</b>. Ayez accès à toute l'information sur les améliorations du dispositif ainsi que les différents évènements et partenariats autour de la cécité organisés par <b>Moovision</b>.</p> 
    </div>
    </section>
    <div class="login-popup">

      <div class="form-popup" id="popupForm">

        <form action=#new class="form-container">

          <h2 id="new">Inscription à notre Newsletter</h2>


          <input type="text" id="news" placeholder="Votre Email" name="email" required>

          <button type="submit" onclick="inscrip()" class="btn">Incription</button> 

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
            <a href="./vue/html/Contacteznous.php"
              ><button class="footer_button">Contactez-nous</button>
            </a>
          </td>
          <td>
            NEWSLETTER
            <a href=#new
              ><button class="footer_button">Je m'inscris</button>
            </a>
          </td>
          <td>
            CONDITIONS GÉNÉRALES DE VENTE
            <a href="./vue/html/CGV.php"
              ><button class="footer_button">CGV</button></a
            >
          </td>
        </tr>
      </table>
    </div>
  </footer>
</html>