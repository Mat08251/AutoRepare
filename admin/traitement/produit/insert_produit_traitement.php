<?php 
    include('../../../php/connectbdd.php');

    //on récupére les données du formulaire
    $nom= $_POST['nom'];
    $descriptif= $_POST['descriptif'];
    $prix= $_POST['prix'];

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
    $produit= $bdd->prepare("INSERT INTO vente_produit (titre_produit, texte_produit, prix_produit, image_produit)
    VALUES (:titre_produit, :texte_produit, :prix_produit, :image)");
    $produit->execute(array(
        'titre_produit' => $nom,
        'texte_produit' => $descriptif,
        'prix_produit' => $prix,
        'image' => $fichier
    ));
}
catch(PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
    //on ferme le requête et on redirige vers la page admin
    $produit->closeCursor();
    header('location:../../admin.php?success=4');

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