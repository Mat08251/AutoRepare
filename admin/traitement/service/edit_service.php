<?php 
    include('../../../php/connectbdd.php');
    if (empty($_SESSION['id_admin']) AND empty($_SESSION['pseudo']) AND empty($_SESSION['statut']))
{
    header('location:../../../index.php');
}

    $id= $_GET['id'];

    try {
    $editservices= $bdd->prepare("SELECT * FROM services WHERE id_services= '$id'");
    $editservices->execute();

    while($data= $editservices->fetch()) {

    
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
  <h2 class="text-center titre_formulaire">Formulaire de modification de la page service </h2>
    <form class="text-center mx-auto" action="edit_service-traitement.php?id=<?=$data['id_services'] ?>" method="POST">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">nom du service</label>
            <input class="form-control mx-auto type="text" name="nom" required value="<?=$data['nom_service'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Paragraphe 1</label>
            <textarea class="form-control mx-auto type="text" name="descriptif1" rows="5" cols="30" required><?=$data['texte1_service'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Paragraphe 2</label>
            <textarea class="form-control mx-auto type="text" name="descriptif2" rows="5" cols="30" required><?=$data['texte2_service'] ?></textarea>
        </div>
            
        <button class="btn " type="submit">valider</button>
        


    </form>
    <?php } }
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $editservices->closeCursor(); ?>
</body>
</html>