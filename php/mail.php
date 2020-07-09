<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       $nom = htmlspecialchars ($_POST['nom']);
       $prenom = htmlspecialchars ($_POST['prenom']);
       $tel = htmlspecialchars ($_POST['tel']);
       $email = htmlspecialchars ($_POST['email']);
       $fichier = ($_POST['fichier']);
       $message = htmlspecialchars ($_POST['message']);
       $EmailTo = "bibi080@live.fr";
       $EmailFrom = $_POST['email'];
    

        $Body = "";
        $Body .= "nom: ";
        $Body .= $nom;
        $Body .= "\n";
        $Body .= "prenom: ";
        $Body .= $prenom;
        $Body .= "\n";
        $Body .= "tel: ";
        $Body .= $tel;
        $Body .= "\n";
        $Body .= "email: ";
        $Body .= $email;
        $Body .= "\n";
        $Body .= "fichier: ";
        $Body .= $fichier;
        $Body .= "\n";
        $Body .= "message: ";
        $Body .= $message;
        $Body .= "\n";


       $success = mail($EmailTo, "Contact -- AutoRepare", $message, "From: <$EmailFrom>");

       if ($success){
           echo "votre message à bien été envoyé.";
       }
       else{
           echo "Une erreur s'est produite à l'envoi de votre message.";
       }
    ?>
</body>
</html>