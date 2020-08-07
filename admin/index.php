<?php 
session_start();
if(isset($_GET['success'])) {
    if($_GET['success']==1) {
        echo 'les identifiants ne sont pas bon';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <link rel="stylesheet" href="../css/-Login-form-Page-BS4-.css">
    
</head>

<body>
    <div class="index container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch  p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                     <!-- alert -->
        <center>
            <?php if(isset($_GET['alert'])) {
                    if($_GET['alert'] == 1) {?>
                        <div class="alert alert-danger" role="alert">
                        Les identifiants ne sont pas bon.
                        </div>
            <?php }} ?>

                    <center><img src="../images/logo.png" class="w-75 mb-4"></center>
                    <center><a class="lienAccueil" href="../index.php">Revenir à l'accueil</a></center>
                    <form action="connexionadmin.php" method="POST">
                        <div class="form-group mt-4"><label class="text-secondary">Pseudo</label><input class="form-control" id="pseudo" name="pseudo" type="text" required=""></div>
                        <div class="form-group"><label class="text-secondary">Mot de passe</label><input class="form-control" id="mdp" name="mdp" type="password" required=""></div><center>
                        <button class="btn btn-lg mt-2" style="background-color: rgb(0, 0, 158);" type="submit">connexion</button></center></form>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;../images/image3.jpg&quot;);background-size:cover;background-position:center center;">
                <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a class="text-dark" href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank"><em>Duguet Mathieu</em></a><br></p>
            </div>
        </div>
    </div>
</body>

</html>

