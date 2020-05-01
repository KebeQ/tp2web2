<?php
$options = array( 
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
PDO::ATTR_EMULATE_PREPARES => false 
);

try {
$conn = new PDO('mysql:host=localhost;dbname=tp2_lucaslm_hubertd','webphp','qwerty123', $options);  
    }
catch (PDOException $e) {
    exit( "Erreur lors de la connexion à la BD: ".$e->getMessage());
    }
    ?>