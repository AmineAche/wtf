<?php
    $user = 'root';
    $pass = '';

    try{
        $opts = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $db = new PDO("mysql:host=localhost;dbname=Amine;charset=utf8",$user,$pass,$opts);
    } catch(PDOException $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
    }
    
?>