<?php
session_start();
include('../php/connectbdd.php');

$pseudo = $_SESSION['pseudo'];

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
    <h3 class="lien-admin font-weight-light  mt-4 mb-5"><center>Promotion page vente</center></h3>
    <div class="navigation col-md-6">
        <div class="container">  
            <div class="card-deck">
                <div class="admin-nav card col-sm-6 " style="background-image: url(../images/cardajout-promo.png ); ">
                <a href="admin.php" class="lien-card"><h5 class="card-title text-center">Accès à l'accueil admin</h5></a> 
                </div>
                <div class="admin-nav card col-sm-6 " style="background-image: url(../images/ajoutpromoVente.png); ">
                    <a href="traitement/promoVente/insert_promoVente.php" class="lien-card"><h5 class="card-title text-center">Ajouter une promotionVente</h5></a>
                </div>
            </div>
        </div>
    </div>  
    

    <div class="table-responsive container mt-2">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Descriptif</th>
                    <th scope="col" class="text-center">Image</th>
                    <?php
                    if ($statut == 0) {?>
                    <th scope="col" class="modif">Modifier</th> 
                    <th scope="col">Supprimer</th>
                    <?php }?>
                </tr>
            </thead>
        <tbody>


            <?php
            try {
                $promovente= $bdd->prepare("SELECT * FROM promo_vente");
                $promovente->execute();

                while($promo= $promovente->fetch())
            
            { ?>
            <tr class="fond_tableau">
                <td><?= substr($promo['texte_promoVente'], 0, 20); ?>...</td>
                <td class="text-center"><img style="width: auto; height: 120px;"  src="../images/<?= $promo['image_promoVente'] ?>"</td>
                <?php
                    if ($statut == 0) {?>
                <td><a href="traitement/promoVente/edit_promoVente.php?id=<?=$promo['id_promoVente'] ?>" class="text-muted"><i
                    class="icon fas fa-user-edit"></i></a></td>
                <td><a href="traitement/promoVente/delete_promoVente.php?id=<?=$promo['id_promoVente'] ?>" class="text-muted"><i
                    class="icon fas fa-trash-alt"></i></a></td>
                <?php }?>
            </tr>
            <?php
            } }
            catch(PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
            $promovente->closecursor();
            ?>
        </tbody>
      </table>
    </div>

</body>
</html>