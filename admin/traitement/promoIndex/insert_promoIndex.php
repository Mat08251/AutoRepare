<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/insertion_pageFormulaire.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire d'insertion page d'accueil</title>
</head>
<body>
    <h2 class="text-center titre_formulaire">Formulaire d'ajout de promotion sur la page d'accueil</h2>
    <form class="text-center mx-auto" action="insert_promoIndex_traitement.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Texte descriptif</label>
            <textarea class="form-control  mx-auto" type="text" name="descriptif" rows="5" required></textarea>
        </div>
        <button class="btn " type="submit">valider</button>
        
    </form>
</body>
</html>