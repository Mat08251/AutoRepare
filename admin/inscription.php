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
<body>
    <form class="text-center mx-auto" action="inscription_traitement.php" method="POST" >
        <div class="form-group">
            <label for="exampleFormControlTextarea1">pseudo</label>
            <input class="form-control  mx-auto" type="text" name="pseudo" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">mdp</label>
            <input type="password" class="form-control" name="mdp" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
    <label for="exampleFormControlSelect1">statut</label>
    <select class="form-control" name="statut" id="exampleFormControlSelect1">
      <option>0</option>
      <option>1</option>
      
    </select>
    </div>

        <button class="btn " type="submit">valider</button>
        


    </form>
</body>
</html>