<?php 
    include('../../../php/connectbdd.php');
    if (empty($_SESSION['id_admin']) AND empty($_SESSION['pseudo']) AND empty($_SESSION['statut']))
{
    header('location:../../../index.php');
}

    $id= $_GET['id'];

    try {
    $editvoiture= $bdd->prepare("SELECT * FROM vehicule WHERE id_voiture= '$id'");
    $editvoiture->execute();

    while($data= $editvoiture->fetch()) {

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/edit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <h2 class="text-center titre_formulaire">Formulaire de modification de la page vente de véhicule</h2>
    <form class="text-center mx-auto" action="edit_voiture_traitement.php?id=<?=$data['id_voiture'] ?>" method="POST">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nom du véhicule</label>
            <input class="form-control mx-auto type="text" name="nom" required value="<?=$data['nom_voiture'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Caractéristiques du véhicule</label>
            <textarea class="form-control mx-auto type="text" name="caracteristique" rows="5" cols="30" required><?=$data['caracteristique_voiture'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Texte descriptif du véhicule</label>
            <textarea class="form-control mx-auto type="text" name="descriptif" rows="5" cols="30" required><?=$data['descriptif_voiture'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Prix du véhicule</label>
            <input class="form-control mx-auto type="number" name="prix" required value="<?=$data['prix_voiture'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Statut du véhicule</label>
            <select name="option_vente" id="option_vente">
                <option value="" disabled>--Choisissez une option de vente--</option>
                <option value="0">en vente</option>
                <option value="1">vendu</option>
            </select>
        </div>
            
        <button class="btn " type="submit">valider</button>
        


    </form>
    <?php } }
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
     $editvoiture->closeCursor(); ?>
</body>
</html>