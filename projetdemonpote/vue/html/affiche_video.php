<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/video.css">
</head>
<body>

<div name='horizontal'>
<?php

    foreach ($_SESSION['tab'] as $key => $val) {
        echo "<iframe width='560' height='315' src='".$val."' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    }
?>
</div>

<a href="./entrainement_maison.php">retour</a>
</body>
</html>
