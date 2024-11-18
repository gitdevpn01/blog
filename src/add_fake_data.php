<?php
require_once '../vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');

// for ($i = 0; $i < 10; $i++):
//     echo "<h2>" . $faker->sentence() . "</h2>";
//     echo "<p>" . $faker->paragraphs(10, true) . "</p>";
//     echo "<hr>";
// endfor;

try {
    $connexion = new PDO("mysql:host=localhost;dbname=blog_db", "root", "");
} catch (PDOException $error) {
    echo "Erreur s'est produit lors de la connexion à votre base de donnée : " . $error->getMessage();
}
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stm = $connexion->prepare("INSERT INTO article (title,content) VALUES (:title, :content) ");

for ($i = 0; $i < 10; $i++):
    $title = $faker->sentence();
    $content = $faker->paragraphs(10, true);

    $stm->bindParam(':title', $title);
    $stm->bindParam(':content', $content);

    if ($stm->execute()):
        header("Location: index.php");
    else:
        echo "Erreur lors de l'ajout d'un article !!!!!!!!!!!!";
    endif;
endfor;

$connexion = null;
