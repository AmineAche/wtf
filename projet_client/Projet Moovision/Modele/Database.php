<?php
    $user = 'root';
    $pass = 'root';

    try{
        $db = new PDO("mysql:host=localhost;dbname=Amine;charset=utf8",$user,$pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES,false);
    } catch(PDOException $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
    }
    
?>