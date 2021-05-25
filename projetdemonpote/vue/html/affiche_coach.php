<!DOCTYPE html>
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        extract($_SESSION);
        echo "$coach est un spécialiste dans la catégories: $categories.<br>Vous pouvez dès à présent discuter avec lui.<br>";
    ?>
    <a href="./message_coach.php">Retour</a>
</body>
</html>