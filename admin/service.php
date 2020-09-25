<?php
include('../php/connectbdd.php');
session_start();
$pseudo = $_SESSION['pseudo'];
$mdp = $_SESSION['mdp'];
$statut = $_SESSION['statut'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie Administrateur</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>
<body class="fond">
    <h3 class="lien-admin font-weight-light  mt-4 mb-5"><center>services</center></h3>
    <div class="navigation col-md-6 ">
        <div class="container">  
            <div class="card-deck">
                <div class="admin-nav card col-sm-6 text-center" style="background-image: url(../images/cardajout-promo.png ); ">
                    <a href="admin.php" class="lien-card"><h5 class="card-title text-center">Accès à l'accueil admin</h5></a> 
                </div>
                <div class="admin-nav card col-sm-6 " style="background-image: url(../images/ajoutService.png); ">
                    <a href="traitement/service/insert_service.php" class="lien-card"><h5 class="card-title text-center">Ajouter une service</h5></a>
                </div>
            </div>
        </div>
    </div>  
    

    <div class="table-responsive container mt-2">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">nom du service</th>
                    <th scope="col">Paragraphe 1</th>
                    <th scope="col">Paragraphe 2</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="modif">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
        <tbody>


        <?php
            $service= $bdd->prepare("SELECT * FROM services");
            $service->execute();

            while($services= $service->fetch())
        { ?>
        <tr class="fond_tableau">
            <th scope="row"><?=substr($services['nom_service'], 0, 20); ?></th>
            <td><?= substr($services['texte1_service'], 0, 20); ?>...</td>
            <td><?= substr($services['texte2_service'], 0, 20); ?>...</td>
            <td class="text-center"><img style="width: auto; height: 120px;" src="../images/<?= $services['image_service'] ?>"</td>
            <td> <a href="traitement/service/edit_service.php?id=<?=$services['id_services']  ?>" ><i class="icon fas fa-user-edit"></i></a></td>
            <td><a href="traitement/service/delete_service.php?id=<?=$services['id_services'] ?>" class="text-muted"><i
                class="icon fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
    }
    $service->closecursor();
    ?>
        </tbody>
      </table>
    </div>
</body>
</html>