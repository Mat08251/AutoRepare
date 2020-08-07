<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert_produit_traitement.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nom" required>
        <textarea type="text" name="descriptif" required></textarea>
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000"><br>
        <input type="file" name="image">
        <input type="number" name="prix" step="0.01" min="0" max="100" required>

        <button type="submit">valider</button>
        


    </form>
</body>
</html>