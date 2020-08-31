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
    <title>Document</title>
</head>
<body>
    <form action="edit_promoIndex_traitement.php?id=<?=$data['id_promo'] ?>" method="POST">
        <textarea type="text" name="descriptif" required><?=$data['text_promo'] ?></textarea>

        <button type="submit">valider</button>
        


    </form>
    <?php } $editpromoIndex->closeCursor(); ?>
</body>
</html>