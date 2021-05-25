<?php
    $user = 'root';
    $pass = 'root';

    
    try{
        $db = new PDO("mysql:host=localhost;dbname=fitech;charset=utf8",$user,$pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo $e;
    }
    
?>
