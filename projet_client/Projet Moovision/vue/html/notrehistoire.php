<!DOCTYPE html>
<?php
       session_start();
?>
<html>
  <head>
    <title>MOOVISION</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" href="../css/notrehistoire.css" />
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

<section class="notreequipe">
		<h1>Notre équipe</h1>
		<div class="equipe">
			<div class="membre">
				<img src="../images/DB.png" alt="Dina" class="photo" />
				<h2>DINA BENMOUSSA</h1>
					<h3>Data Scientist</h2>
					<p class="descr">Etudiante en L2 à l'Université <b>Paris-Dauphine</b> en <b>Mathématiques-Informatiques</b>, Dina est aujoud'hui une de nos Data Scientist, son objectif : récolter les données les plus pertinentes pour l'analyse, dans le but de nous aider à prendre des décisions opérationelles pour la start-up.</p>
			</div>
			<div class="membre">
				<img src="../images/CS.png" alt="Clara" class="photo" />
				<h2>CLARA SEBUHYAN</h2>
					<h3>Product Owner</h3>
					<p class="descr">Etudiante en L2 à l'Université <b>Panthéon-Sorbonne</b> en <b>Mathématiques-Informatiques</b>, Clara est notre CEO, la Product Owner de MOOVISION. Elle supervise l'ensemble des activités de la Start-up.</p>
			</div>
			<div class="membre">

				<img src="../images/LB.png" alt="Lina" class="photo"/>
				<h2>LINA BENMOUSSA</h2>
				<h3>Marketing Developer</h3>
					
				<p class="descr">Etudiante en L2 à l'Université <b>Panthéon-Sorbonne</b> en <b>Gestion</b>, Dina est notre Marketing Developer, elle met ses compétences de stratégie et de marketing numérique au profit de la gestion de la start-up et de la commercialisation du produit.</p>

			</div>
			<div class="membre">

				<img src="../images/SB.png" alt="Sara" class="photo"/>
				<h2>SARA BADDOU</h2>
				<h3>Business Developer</h3>

				<p class="descr">Etudiante en L2 à l'Université <b>Panthéon-Sorbonne</b> en <b>Mathématiques-Économie</b>, Sara est aujourd'hui notre Business Developper, elle met au profit du développement business de la start-up ses connaissances du monde économique et du business d'entreprise.</p>

			</div>
			<div class="membre">

				<img src="../images/BM.png" alt="Benjamin" class="photo" />
				<h2 class="nom-poste">BENJAMIN MARCIANO</h2>
				<h3 class="nom-poste">Data Scientist</h3>

				<p class="descr">Etudiant en L2 à l'Université <b>Panthéon-Sorbonne</b> en <b>Mathématiques-Informatiques</b>, Benjamin est aujoud'hui un de nos Data Scientist, son objectif : récolter les données les plus pertinentes pour l'analyse, dans le but de nous aider à prendre des décisions opérationelles pour la start-up.</p>

			</div>

	</div>



</section>


<section class="histoire">
	<div class="pbmajeure">
		<h1>Une problématique majeure</h1>
		<div class="nbaveugles">
			<h2>207 000 aveugles en France</h2>
			<h2>x 3 d'içi 35 ans</h2>
		</div>
		

		<p>De nos jours, <b>250 millions</b> de personnes présentent une déficience visuelle dans le monde dont <b>1,7 millions</b> en France selon l'INSEE, avec <b>207 000 aveugles</b>. Un nombre qui devrait être <b>multiplié par 3 d’ici 35 ans</b>. Il est donc important de se préoccuper de cette cause. Après avoir échanger avec des associations telles que la <b>Fédération Française des aveugles</b> nous avons constaté que très peu de dispositifs ont été mis en place jusqu’à aujourd’hui pour répondre efficacement à leurs besoins. Les différentes innovations commercialisées sont des dispositifs <b>très onéreux et invasifs</b>. Les deux principaux outils de déplacement des aveugles restent la <b>canne blanche ou les chiens guides</b> (10000€ prix moyen).</p>

		<p>Après des échanges via les réseaux sociaux avec des malvoyants, ainsi qu’une étude de marché et des cibles, nous avons pu voir que l’intégration professionnelle des personnes malvoyantes est un enjeu de taille étant donné que <b>50% des personnes déficientes visuelles sont au chômage</b>. Ainsi, la majeure partie des personnes souffrant de cécité n’auront pas forcément les moyens de se procurer des dispositifs trop couteux.</p>

		<p class="imaginez"><b>Mais imaginez tout l’intérêt d’un appareil très abordable qui serait capable de rendre compte de l’environnement autour de la personne en temps réel. C’est la technologie que l’on propose :  elle traduit les obstacles en pression.</b> </p>

		<video controls poster="sintel.jpg" width="600" class="video">
    	<source src="film2.mp4">
		</video>

		<div class="videotitle">
			Regardez la video explicative de notre projet !
		</div>

	</div>

	<div class="notreidee">

		<h1>D'où vient l'idée ?</h1>

		<p>Nous avons eu l'idée durant notre première année d'Université, nous avons ainsi développé les <b>bases scientifiques</b> accompagnés par des professeurs compétents de physique et de science de l’ingénieur.</p>

		<p>Plus tard suite à une rencontre dans le cadre scolaire ainsi qu’un échange très instructif avec une personne malvoyante, nous avons décidé de <b>nous mobiliser</b> afin que les aveugles puissent retrouver une <b>autonomie et liberté</b> dans leur vie de tous les jours. Nous nous sommes donc entourés d’une équipe dotée de diverses compétences pour nous accompagner dans ce projet.</p>
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






















