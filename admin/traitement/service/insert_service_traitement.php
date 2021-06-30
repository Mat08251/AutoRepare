<?php 
    include('../../../php/connectbdd.php');
    if (empty($_SESSION['id_admin']) AND empty($_SESSION['pseudo']) AND empty($_SESSION['statut']))
{
    header('location:../../../index.php');
}

     //on récupére les données du formulaire
    $nom= $_POST['nom'];
    $texte1= $_POST['descrptif1'];
    $texte2= $_POST['descriptif2'];
    

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
    $service= $bdd->prepare("INSERT INTO services (nom_service, texte1_service, texte2_service,  image_service)
    VALUES (:nom_service, :texte1_service, :texte2_service, :image)");
    $service->execute(array(
        'nom_service' => $nom,
        'texte1_service' => $texte1,
        'texte2_service' => $texte2,
        'image' => $fichier
    ));
}
catch(PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
    //on ferme le requête et on redirige vers la page admin
    $service->closeCursor();
    header('location:../../admin.php?success=13');

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