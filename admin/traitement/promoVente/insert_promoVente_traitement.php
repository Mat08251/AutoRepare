<?php 
    include('../../../php/connectbdd.php');

    $descriptif= $_POST['descriptif'];

    $dossier = '../../../images/';
    $fichier = basename($_FILES['image']['name']);
    $taille_maxi = 3000000;
    $taille = filesize($_FILES['image']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['image']['name'], '.');

    //Début des vérifications de sécurité...
    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg';
    }
    if($taille>$taille_maxi)
    {
        $erreur = 'Le fichier est trop gros...';
    }
    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {

    try {
    $promotion= $bdd->prepare("INSERT INTO promo_vente ( texte_promoVente,  image_promoVente)
    VALUES (:texte_promoVente,  :image)");
    $promotion->execute(array(
        'texte_promoVente' => $descriptif,
        'image' => $fichier
    ));
    }
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $promotion->closeCursor();
    header('location:../../admin.php?success=7');

}
else //Sinon (la fonction renvoie FALSE).
{
     echo "Echec de l'upload !";
}
}
else
{
echo $erreur;
}
?>