<?php 
    include('../../../php/connectbdd.php');
    if (empty($_SESSION['id_admin']) AND empty($_SESSION['pseudo']) AND empty($_SESSION['statut']))
{
    header('location:../../../index.php');
}

    $id= $_GET['id'];

    try {
    $editpromoVente= $bdd->prepare("SELECT * FROM promo_vente WHERE id_promoVente= '$id'");
    $editpromoVente->execute();

    while($data= $editpromoVente->fetch()) {

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/edit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center titre_formulaire">Formulaire de modification de la promotion page vente produit</h2>
    <form class="text-center mx-auto" action="edit_promoVente_traitement.php?id=<?=$data['id_promoVente'] ?>" method="POST">
        <div class="form-group"> 
            <label for="exampleFormControlTextarea1">Texte de la promo page vente</label>
            <textarea class="form-control mx-auto type="text" name="descriptif" required><?=$data['texte_promoVente'] ?></textarea>
        </div>

        <button class="btn " type="submit">valider</button>
        


    </form>
    <?php } }
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $editpromoVente->closeCursor(); ?>
</body>
</html>