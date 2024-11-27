<?php
require "connect.php";

$result = $connexion->query('SELECT * FROM article ORDER BY id DESC');

$articles = [];

while($row = $result->fetch(PDO::FETCH_ASSOC)):
    $articles[] = $row;
endwhile;

$connexion = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/htmx.org@2.0.3"></script>
</head>
<body>
    <main>
        
    <header>
        <a href="add_form.php"
        hx-get="add_form.php"
        hx-target="#form_ajout_article"
        hx-swap="outerHTML"
        >Ajouter un article</a>

        <a href="add_fake_data.php">Ajouter de fausses donnée</a>
        
    </header>
    <section id="form_ajout_article"></section>
    
        <?php
            foreach($articles as $article):
        ?>
                <section>
                    <h2><?= $article['title'] ?>
                <span hx-delete="del_article.php?id=<?= $article['id'] ?>"              hx-confirm="Etes vous certain de supprimer cet article !?"
                hx-swap="outerHTML"
                class="delete">X</span>
                </h2>
                    <p><?= $article['content'] ?></p>
                </section>
        <?php
                endforeach;
        ?>
    </main>
</body>
</html>