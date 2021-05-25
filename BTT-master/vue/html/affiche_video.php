<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/inscrire.css">
</head>
<body>

<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
<?php

    foreach ($_SESSION['tab'] as $key => $val) {
        echo "<iframe width='560' height='315' src='".$val."' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    }
?>
</div>

<a href="./entrainement_maison.php"><p>retour</p></a>
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
