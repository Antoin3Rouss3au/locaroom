<?php

require 'dev.env.php';

try {
    $connexion_string = "mysql:dbname=".DBNAME.";host=".DBHOST;
    $connexion = new PDO($connexion_string, DBUSER, DBPASS);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    echo'Connexion ok !!';
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>