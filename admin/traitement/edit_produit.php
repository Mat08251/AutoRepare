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
    <title>Document</title>
</head>
<body>
    <form action="edit_produit_traitement.php?id=<?=$data['id_produit'] ?>" method="POST">
        <input type="text" name="nom" required value="<?=$data['titre_produit'] ?>">
        <textarea type="text" name="descriptif" required><?=$data['texte_produit'] ?></textarea>
        <input type="number" name="prix" step="0.01" min="0" max="100" required value="<?=$data['prix_produit'] ?>">

        <button type="submit">valider</button>
        


    </form>
    <?php } $editproduit->closeCursor(); ?>
</body>
</html>