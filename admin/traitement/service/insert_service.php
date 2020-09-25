<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/insertion_pageFormulaire.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire d'insertion page service</title>
</head>
<body>
    <h2 class="text-center titre_formulaire">Formulaire d'ajout d'un service sur la page services</h2>
    <form class="text-center mx-auto" action="insert_service_traitement.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nom du service</label>
            <input class="form-control  mx-auto" type="text" name="nom" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descriptif texte 1 du service</label>
            <textarea class="form-control  mx-auto" type="text" name="descrptif1" rows="5" cols="50" required></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrptif texte 2 du service</label>
            <textarea class="form-control  mx-auto" type="text" name="descriptif2" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Image du service</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000"><br>
            <input type="file" name="image">
        </div>
        

        <button class="btn " type="submit">valider</button>
        


    </form>
</body>
</html>