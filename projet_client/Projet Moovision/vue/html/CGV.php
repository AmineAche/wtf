<!DOCTYPE html>
<?php
       session_start();
?>
<html lang="fr">
  <head>
    <title>Conditions Générales d'Utilisation et de vente</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../css/CGV.css" />
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap"
      rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Roboto:wght@100;300;400&display=swap"rel="stylesheet"/>
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
  </br> </br></br>
    <a id="haut"> </a>
    
    <div class="princip">
    <div class="menu">
      <p>
        <a href="#prenbule">Préambule. Info de la societée.</a>
      </p>   
      <p>
        <a href="#article1">Article 1. Objet </a>
      </p>
      <p>
        <a href="#article2">Article 2. Dispositions générales </a>
      </p>
      <p>
        <a href="#article3">Article 3. Prix</a>
      </p>
      <p>
        <a href="#article4">Article 4. Conclusion du contrat en ligne</a>
      </p>
      <p>
        <a href="#article5">Article 5. Produits et services</a>
      </p>
      <p>
        <a href="#article6">Article 6. Données à caractère personnel</a>
      </p>
      <p id="h3">
        <a href="#article6.1">6.1 Données à caractère personnel des Enquêteurs</a>
      </p>
      <p id="h3">
        <a href="#article6.2">6.2 Conformité </a>
      </p>
      <p>
        <a href="#article7">Article 7. Modalités de livraison </a>
      </p>
    </div>  

    <div class="texte">

      <strong><h2 class="titre">Conditions Générales d'Utilisation</h2> </strong>


      <h3 id="prenbule">Préambule et info de la sociétée.</h3>

      <p>Société Moovision,
         90 rue de tolbiac,
    au Capital Social de 1 494 264.84 €
    immatriculée au Registre du Commerce et des Sociétés de PARIS,
    sous le numéro SIRET 123098765645646
    représentée par Benjamin MARTIANO et Clara SEBUHYAN
     en qualité de gérants , dûment habilité aux fins des présentes.
    La société peut être jointe par email en cliquant sur le formulaire de contact accessible via la page d’accueil du site. Ou directement en utilisant l’adresse Contactclara@gmail.com 

Ci-après le « Vendeur » ou la « Société ». D’une part, Et la personne physique ou morale procédant à l’achat de produits ou services de la société, Ci-après, « l’Acheteur », ou « le Client » D’autre part, Il a été exposé et convenu ce qui suit : </p>


<p>Le Vendeur est éditeur de Produits et Services de  Vente de gant pour handicapés à destination de consommateurs, commercialisés par l’intermédiaire de ses sites Internet (www.moovisoon.com). La liste et le descriptif des biens et services proposés par la Société peuvent être consultés sur les sites susmentionnés. </p>



    <h2 id="article1">Article 1. Objet</h2>

      <p>Les présentes Conditions Générales de Vente déterminent les droits et obligations des parties dans le cadre de la vente en ligne de Produits ou Services proposés par le Vendeur..</p>

        <h3>Description des objectifs de la plateforme et fonctionnement</h3>

      <p>Le site « Moovision » permet la vente d'objet et propose de l'aide au personne à mobilités reduite. En s'appuyant sur les nouvelles technologie </p>

    <h2 id="article2">Article 2. Dispositions générales</h2>

      <p>Les présentes Conditions Générales de Vente (CGV) régissent les ventes de Produits ou de Services, effectuées au travers des sites Internet de la Société, et sont partie intégrante du Contrat entre l’Acheteur et le Vendeur. Elle sont pleinement opposable à l’Acheteur qui les a accepté avant de passer commande. Le Vendeur se réserve la possibilité de modifier les présentes, à tout moment par la publication d’une nouvelle version sur son site Internet. Les CGV applicables alors sont celles étant en vigueur à la date du paiement (ou du premier paiement en cas de paiements multiples) de la commande. Ces CGV sont consultables sur le site Internet de la Société à l’adresse suivante : www.moovision.com.
    La Société s’assure également que leur acceptation soit claire et sans réserve en mettant en place une case à cocher et un clic de validation. Le Client déclare avoir pris connaissance de l’ensemble des présentes Conditions Générales de Vente, et le cas échéant des Conditions Particulières de Vente liées à un produit ou à un service, et les accepter sans restriction ni réserve.
    Le Client reconnaît qu’il a bénéficié des conseils et informations nécessaires afin de s’assurer de l’adéquation de l’offre à ses besoins.
    Le Client déclare être en mesure de contracter légalement en vertu des lois françaises ou valablement représenter la personne physique ou morale pour laquelle il s’engage.
    Sauf preuve contraire les informations enregistrées par la Société constituent la preuve de l’ensemble des transactions.</p>

      <h2 id="article3">Article 3. Prix</h2> 

          <p> Les prix des produits vendus au travers des sites Internet sont indiqués en Euros hors taxes et précisément déterminés sur les pages de descriptifs des Produits. Ils sont également indiqués en euros toutes taxes comprises (TVA + autres taxes éventuelles) sur la page de commande des produits, et hors frais spécifiques d’expédition. Pour tous les produits expédiés hors Union européenne et/ou DOM-TOM, le prix est calculé hors taxes automatiquement sur la facture. Des droits de douane ou autres taxes locales ou droits d’importation ou taxes d’état sont susceptibles d’être exigibles dans certains cas. Ces droits et sommes ne relèvent pas du ressort du Vendeur. Ils seront à la charge de l’acheteur et relèvent de sa responsabilité (déclarations, paiement aux autorités compétentes, etc.). Le Vendeur invite à ce titre l’acheteur à se renseigner sur ces aspects auprès des autorités locales correspondantes.La Société se réserve la possibilité de modifier ses prix à tout moment pour l’avenir. Les frais de télécommunication nécessaires à l’accès aux sites Internet de la Société sont à la charge du Client. Le cas échéant également, les frais de livraison. </p>

      <h2 id="article4">Article 4. Conclusion du contrat en ligne </h2> 

          <p>Conformément aux dispositions de l’article 1127-1 du Code civil, le Client doit suivre une série d’étapes pour conclure le contrat par voie électronique pour pouvoir réaliser sa commande :; Information sur les caractéristiques essentielles du Produit ; – Choix du Produit, le cas échéant, de ses options – Indication des coordonnées essentielles du Client (identification, email, adresse…) ; – Acceptation des présentes Conditions Générales de Vente – Vérification des éléments de la commande (formalité du double clic) et, le cas échéant, correction des erreurs. Avant de procéder à sa confirmation, l’Acheteur a la possibilité de vérifier le détail de sa commande, son prix, et de corriger ses éventuelles erreur, ou annuler sa commande. La confirmation de la commande emportera formation du présent contrat. – Ensuite, suivi des instructions pour le paiement, paiement des produits, puis livraison de la commande. Le Client recevra confirmation par courrier électronique du paiement de la commande, ainsi qu’un accusé de réception de la commande la confirmant. Il recevra un exemplaire .pdf des présentes conditions générales de vente.
          Le client disposera pendant son processus de commande de la possibilité d’identifier d’éventuelles erreurs commises dans la saisie des données et de les corriger. La langue proposé pour la conclusion du contrat est la langue française.
          Les modalités de l’offre et des conditions générales de vente sont renvoyées par email à l’acheteur lors de la commande et archivées sur le site web du Vendeur. Le cas échéant, les règles professionnelles et commerciales auxquelles l’auteur de l’offre entend se soumettre sont consultables dans la rubrique « règles annexes » des présentes CGV, consultables sur le site du Vendeur à l’adresse suivante : www.moovision.com
          L’archivage des communications, de la commande, des détails de la commande, ainsi que des factures est effectué sur un support fiable et durable de manière constituer une copie fidèle et durable conformément aux dispositions de l’article 1360 du code civil. Ces informations peuvent être produits à titre de preuve du contrat.
          Pour les produits livrés, la livraison se fera à l’adresse indiquée par le Client. Aux fins de bonne réalisation de la commande, le Client s’engage à fournir ses éléments d’identification véridiques. Le Vendeur se réserve la possibilité de refuser la commande, par exemple pour toute demande anormale, réalisée de mauvaise foi ou pour tout motif légitime.
          </p>

      <h2 id="article5">Article 5. Produits et services</h2>

      <p>Les caractéristiques essentielles des biens, des services et leurs prix respectifs sont mis à disposition de l’acheteur sur les sites Internet de la société, de même, le cas échéant, que le mode d’utilisation du produit. Conformément à l’article L112-1 du Code la consommation, le consommateur est informé, par voie de marquage, d’étiquetage, d’affichage ou par tout autre procédé approprié, des prix et des conditions particulières de la vente et de l’exécution des services avant toute conclusion du contrat de vente. Dans tous les cas, le montant total dû par l’Acheteur est indiqué sur la page de confirmation de la commande. Le prix de vente du produit est celui en vigueur indiqué au jour de la commande, celui-ci ne comportant par les frais de ports facturés en supplément. Ces éventuels frais sont indiqués à l’Achteur lors du process de vente, et en tout état de cause au moment de la confirmation de la commande. Le Vendeur se réserve la possibilité de modifier ses prix à tout moment, tout en garantissant l’application du prix indiqué au moment de la commande. Lorsque les produits ou services ne sont pas exécuté immédiatement, une information claire est donnée sur la page de présentation du produit quant aux dates de livraison des produits ou services. Le client atteste avoir reçu un détail des frais de livraison ainsi que les modalités de paiement, de livraison et d’exécution du contrat, ainsi qu’une information détaillée relative à l’identité du vendeur, ses coordonnées postales, téléphoniques et électroniques, et à ses activités dans le contexte de la présente vente. Le Vendeur s’engage à honorer la commande du Client dans la limite des stocks de Produits disponibles uniquement. A défaut, le Vendeur en informe le Client ; si la commande a été passée, et à défaut d’accord avec le Client sur une nouvelle date de livraison, le Vendeur rembourse le client. Les informations contractuelles sont présentées en détail et en langue française. Les parties conviennent que les illustrations ou photos des produits offerts à la vente n’ont pas de valeur contractuelle. La durée de validité de l’offre des Produits ainsi que leurs prix est précisée sur les sites Internet de la Société, ainsi que la durée minimale des contrats proposés lorsque ceux-ci portent sur une fourniture continue ou périodique de produits ou services. Sauf conditions particulières, les droits concédés au titre des présentes le sont uniquement à la personne physique signataire de la commande (ou la personne titulaire de l’adresse email communiqué). </p> 

      

      <h2 id="article6">Article 6. Données à caractère personnel</h2>

      <p>Est une donnée à caractère personnel « toute donnée se rapportant à une personne physique identifiée ou identifiable […] directement ou indirectement, notamment par référence à un identifiant, tel qu'un nom, un numéro d'identification, des données de localisation, un identifiant en ligne, ou à un ou plusieurs éléments spécifiques propres à son identité physique, physiologique, génétique, psychique, économique, culturelle ou sociale » article 4 du Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016.</p>

        <h3 id="article6.1">6.1 Données à caractère personnel des Enquêteurs</h3> 
          <p>Afin d’accéder à l’ensemble des fonctionnalités de la plateforme, les utilisateurs doivent se créer un compte personnel. 
          Conformément au règlement européen (UE) 2016/679 du 27 avril 2016 relatif à la protection des personnes physiques à l’égard du traitement des données à caractère personnel, et à la loi « Informatique, fichiers et libertés » n° 78-17 du 6 janvier 1978 modifiée, les informations recueillies sur le formulaire d’inscription à la plateforme sont enregistrées dans un fichier informatisé par l’unité de recherche Linguistique, langues, Parole (LiLPa) de l’Université de Strasbourg.
          Elles le sont sur la base du consentement des personnes souhaitant créer un compte utilisateur « Enquêteur ».
          Le consentement peut être retiré à tout moment.
          Ces informations sont indispensables pour la création du compte personnel de l’Enquêteur. 
          Elles font l’objet d’un traitement informatique uniquement destiné à l'administration, la gestion de la plateforme et sont conservées pendant la durée d’inscription de l’Enquêteur à la plateforme.
          Les données personnelles suivantes sont collectées lors de cette procédure : nom, prénom, nom d’utilisateur, mail, mot de passe, qualité. 
          Moovision s’engage à ne pas utiliser les données collectées à des fins commerciales. Aucune donnée personnelle recueillie sur la plateforme ne sera cédée à des tiers. </p>

        <h3 id="article6.2">6.2 Conformité </h3>
        <p>Conformément à l’article L.411-1 du Code de la consommation, les produits et les services offert à la vente au travers des présentes CGV répondent aux prescriptions en vigueur relatives à la sécurité et à la santé des personnes, à la loyauté des transactions commerciales et à la protection des consommateurs. Indépendamment de toute garantie commerciale, le Vendeur reste tenu des défauts de conformité et des vices cachés du produit.
        Conformément à l’article L.217-4, le vendeur livre un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l’emballage, des instructions de montage ou de l’installation lorsque celleci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité.
        Conformément aux dispositions légales en matière de conformité et de vices cachés (art. 1641 c. civ.), le Vendeur rembourse ou échange les produits défectueux ou ne correspondant pas à la commande. Le remboursement peut être demandé de la manière suivante : dépôt d’une plainte à l’adresse <a href="contactclara@gmail.com"> contactclara@gmail.com</a>  </p>

        <h2 id="article7">Article 7. Modalités de livraison </h2>
        <p> Les produits sont livrés à l’adresse de livraison qui a été indiquée lors de la commande et dans les délais indiqués. Ces délais ne prenent pas en compte le délai de préparation de la commande. Lorsque le Client commande plusieurs produits en même temps ceux-ci peuvent avoir des délais de livraison différents acheminés selon les modalités suivantes : livraison via un ou plusieurs colis. En cas de retard d’expédition dépôt d’une plainte à l’adresse contactclara@gmail.com. En cas de retard de livraison, le Client dispose de la possibilité de résoudre le contrat dans les conditions et modalités définies à l’Article L 138-2 du Code de la consommation. Le Vendeur procède alors au remboursement du produit et aux frais « aller » dans les conditions de l’Article L 138-3 du Code de la consommation. Le Vendeur met à disposition un point de contact téléphonique (coût d’une communication locale à partir d’un poste fixe) indiqué dans l’email de confirmation de commande afin d’assurer le suivi de la commande. Le Vendeur rappelle qu’au moment où le Client pend possession physiquement des produits, les risques de perte ou d’endommagement des produits lui sont transférés. Il appartient au Client de notifier au transporteur toute réserves sur le produit livré. </p>
      </br> </br></br></br></br>
      </div>
    </div>
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
</html>
