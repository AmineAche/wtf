<!DOCTYPE html>
<?php
    include '../../controleur/message_c_and_c.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Messagerie</title>
    </head>
    <link rel="stylesheet" href="../css/inscrire.css">
    
    <body>
    <div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
        <?php
            if(isset($_POST['go'])) {
            $nom = explode( ' ', $_POST['go']);
            $_SESSION['corres'] = $_POST['go'];
            $_SESSION['id_corres'] = $_POST['id'];
            }

            echo"<h1>Conversation avec : ".$_SESSION['corres']."</h1>";
            
            $message = afficher_message();
            for ($i=0; $i < count($message); $i++) {
                echo ($message[$i]);
            }
        ?>
        
        <form action="../../controleur/message_c_and_c.php" method="POST">
            <textarea name="message" rows="8" cols="80"></textarea><p>
            <input type="submit" name="Envoyez" value="Envoyez">
        </form>

        <form action="message_c_and_c.php" method="POST">
            <input type="submit" name="allez" value="Actualiser">
        </form>
    
    
        <a href="../../controleur/retour_coach.php"><p>Retour</p></a>
        </div>
		</div>
        
        <div class="colorlibcopy-agile">
			<p>© 2020 By INTECH</p>
		</div>
        <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
    
    </body>
</html>