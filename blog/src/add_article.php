<?php
require "connect.php";

$title = htmlspecialchars($_POST['title'],ENT_QUOTES, 'UTF-8');
$content = htmlspecialchars($_POST['content'],ENT_QUOTES, 'UTF-8');

$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stm = $connexion->prepare("INSERT INTO article (title,content) VALUES (:title, :content) ");

$stm->bindParam(':title', $title);
$stm->bindParam(':content', $content);

if($stm->execute()):
    header("Location: index.php");
else:
    echo "Erreur lors de l'ajout d'un article !!!!!!!!!!!!";
endif;

$connexion = null;