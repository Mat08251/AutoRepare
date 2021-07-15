<?php 
     session_start();
if(isset($_GET['success'])) {
    if($_GET['success']==1) {
        echo 'l\'adresse e-mail rentré n\'est pas correct';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/inscription.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>inscription</title>
</head>
<body>
<?php
    //gestion des erreurs lors de l'inscription 
    if(isset($_GET['reg_err']))
    {
        $err = htmlspecialchars($_GET['reg_err']);

        switch($err)
        {
            case 'success' :
                ?>
                <div class="alert alert-success mx-auto col-4 mt-5">
                    <strong>Succès</strong> inscription réussie
                </div>
            <?php
            break;

            case 'mdp' :
                ?>
                <div class="alert alert-danger mx-auto col-4 mt-5">
                    <strong>Erreur</strong> mot de passe différent
                </div>
            <?php
            break;

            case 'email' :
                ?>
                <div class="alert alert-danger mx-auto col-4 mt-5">
                    <strong>Erreur</strong> email non valide
                </div>
            <?php
            break;

            case 'email_length' :
                ?>
                <div class="alert alert-danger mx-auto col-4 mt-5">
                    <strong>Erreur</strong> email trop long
                </div>
            <?php
            break;

            case 'pseudo_length' :
                ?>
                <div class="alert alert-danger mx-auto col-4 mt-5">
                    <strong>Erreur</strong> pseudo trop long
                </div>
            <?php
            break;

            case 'already' :
                ?>
                <div class="alert alert-danger mx-auto col-4 mt-5">
                    <strong>Erreur</strong> compte deja existant
                </div>
            <?php
            break;
        }
    }

?>  <div class="container formulaire-inscription">
        <form class="formu" action="inscription_traitement.php" method="POST" >
            <div class="form-group">
                <label for="exampleFormControlTextarea1">pseudo</label>
                <input class="form-control col-3 mx-auto" type="text" name="pseudo" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">mdp</label>
                <input type="password" class="form-control col-3 mx-auto" name="mdp" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">confirmer votre mot de passe</label>
                <input type="password" class="form-control col-3 mx-auto" name="mdp_confirm" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">email</label>
                <input type="email" class="form-control col-5 mx-auto" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
        <label for="exampleFormControlSelect1">statut</label>
        <select class="form-control col-2 mx-auto" name="statut" id="exampleFormControlSelect1">
        <option>0</option>
        <option>1</option>
        
        </select>
        </div>

            <button class="btn btn-primary mt-2 mb-2" type="submit">valider</button>
            


        </form>
    </div>
</body>
</html>