<?php
include ("Top.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/dist/css/custom.css">
    <title>Class2.0</title>
</head>
<body>
<div class="container">
    <h3 class="text-center" style="margin-bottom: 2%">Connexion</h3>
</div>

    <div class="jumbotron">
        <div class="container">
            <form action="Loadingdata.php" method="post" class="form-horizontal" style="margin-left:25%; margin-right: 25%">
                <label for="usernameInput">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                <br>
                <label for="passwordInput">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                <br>
                <button type="submit" class="btn btn-primary center-block" name="buttonconnexion">Log in</button>
                <a class="pull-right" href="#">Forgot your password?</a>

            </form>
            <p class="text-center" style="margin-top: 5%;font-size: 140%">Pas encore membre? <a href="InscriptionPage.php">Inscrit </a>toi dès maintenant</p>
        </div>
    </div>




<footer>
    <?php
    include ("footer.php");
    ?>
</footer>
</body>
</html>
