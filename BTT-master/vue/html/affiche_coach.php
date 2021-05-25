<!DOCTYPE html>
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>choisir un coach</title>
    <link rel="stylesheet" href="../css/inscrire.css">
</head>
<body>
<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
    <?php
        extract($_SESSION);
        echo "$coach est un spécialiste dans la catégories: $categories.<br>Vous pouvez dès à présent discuter avec lui.<br>";
    ?>
    <a href="./message_coach.php"><p>Retour</p></a>
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