<?php 
    include('../../php/connectbdd.php');

    $id= $_GET['id'];

    $editproduit= $bdd->prepare("SELECT * FROM vente_produit WHERE id_produit= '$id'");
    $editproduit->execute();

    while($data= $editproduit->fetch()) {

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/edit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center titre_formulaire">Formulaire de modification de la page vente de produit</h2>
    <form class="text-center mx-auto" action="edit_produit_traitement.php?id=<?=$data['id_produit'] ?>" method="POST">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nom du produit</label>
            <input class="form-control mx-auto type="text" name="nom" required value="<?=$data['titre_produit'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descriptif du produit</label>
            <textarea class="form-control mx-auto type="text" name="descriptif" required><?=$data['texte_produit'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Prix du produit</label>
            <input class="form-control mx-auto type="number" name="prix" step="0.01" min="0" max="100" required value="<?=$data['prix_produit'] ?>">
        </div>

        <button class="btn " type="submit">valider</button>
        


    </form>
    <?php } $editproduit->closeCursor(); ?>
</body>
</html>