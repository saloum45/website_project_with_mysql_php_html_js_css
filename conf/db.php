<?php
    
    
    $USER="root";
    $PASS="";
    try {
        $con = new PDO("mysql:host=localhost;dbname=gestion_emprunt;",$USER,$PASS);

    } catch (Exception $e) {
        echo "erreur de connection ".$e->getMessage();
    }

    
?>