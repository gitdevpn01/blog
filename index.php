<?php

// phpinfo();
// echo "Cool ça marche !";

try {
    $connexion = new PDO("mysql:host=mysql;dbname=blog_db", "root", "monpassroot");
    echo 'Yeah connecté à la base de donnée.';
} catch (PDOException $error)
{
    echo "Erreur s'est produit lors de la connexion à votre base de donnée : " . $error->getMessage();
}
