<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2.0.6/css/pico.classless.min.css"
    />
</head>
<body>
    <main>
        <h1>Ajouter un article</h1>
        <form action="add_article.php" method="GET">
            <div>
                <label for="title">Titre de l'article</label>
                <input type="text" name="title" placeholder="Entrer votre texte ...">
            </div>

        </form>
    </main>
</body>
</html>