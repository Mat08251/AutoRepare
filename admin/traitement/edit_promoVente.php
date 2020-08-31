<?php 
    include('../../php/connectbdd.php');

    $id= $_GET['id'];

    $editpromoVente= $bdd->prepare("SELECT * FROM promo_vente WHERE id_promoVente= '$id'");
    $editpromoVente->execute();

    while($data= $editpromoVente->fetch()) {

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit_promoVente_traitement.php?id=<?=$data['id_promoVente'] ?>" method="POST">
        <textarea type="text" name="descriptif" required><?=$data['texte_promoVente'] ?></textarea>

        <button type="submit">valider</button>
        


    </form>
    <?php } $editpromoVente->closeCursor(); ?>
</body>
</html>