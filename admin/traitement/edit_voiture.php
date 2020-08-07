<?php 
    include('../../php/connectbdd.php');

    $id= $_GET['id'];

    $editvoiture= $bdd->prepare("SELECT * FROM vehicule WHERE id_voiture= '$id'");
    $editvoiture->execute();

    while($data= $editvoiture->fetch()) {

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit_voiture_traitement.php?id=<?=$data['id_voiture'] ?>" method="POST">
        <input type="text" name="nom" required value="<?=$data['nom_voiture'] ?>">
        <textarea type="text" name="caracteristique" required><?=$data['caracteristique_voiture'] ?></textarea>
        <textarea type="text" name="descriptif" required><?=$data['descriptif_voiture'] ?></textarea>
        <input type="number" name="prix" required value="<?=$data['prix_voiture'] ?>">

        <button type="submit">valider</button>
        


    </form>
    <?php } $editvoiture->closeCursor(); ?>
</body>
</html>