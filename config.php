<?php

// Connexion à la base
$db = mysqli_connect("localhost", "root", "", "piscine");

// Vérification de la connexion
if (!$db) {
    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
    echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    exit();
}

?>