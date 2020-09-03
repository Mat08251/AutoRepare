<?php 
    include('../../php/connectbdd.php');

    $id= $_GET['id'];

    $editpromoIndex= $bdd->prepare("SELECT * FROM promotions WHERE id_promo= '$id'");
    $editpromoIndex->execute();

    while($data= $editpromoIndex->fetch()) {

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/edit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center titre_formulaire">Formulaire de modification de la promotion page Accueil</h2>
    <form class="text-center mx-auto" action="edit_promoIndex_traitement.php?id=<?=$data['id_promo'] ?>" method="POST">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descriptif de la promo page d'accueil</label>
            <textarea class="form-control mx-auto type="text" name="descriptif" required><?=$data['text_promo'] ?></textarea>
        </div>

        <button class="btn " type="submit">valider</button>
        


    </form>
    <?php } $editpromoIndex->closeCursor(); ?>
</body>
</html>