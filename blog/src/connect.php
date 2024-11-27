<?php

try {
    $connexion = new PDO("mysql:host=mysql;dbname=blog_db", "toto", "totopass");
} catch (PDOException $error)
{
    echo "Erreur s'est produit lors de la connexion à votre base de donnée : " . $error->getMessage();
    die();
}