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
    <h3 class="text-center" style="margin-bottom: 2%">Inscription</h3>
</div>

<div class="jumbotron">
    <div class="container">
        <p class="text-center" style="font-size: 140%">Possède déjà un compte? <a href="ConnexionPage.php">Connecte </a>toi dès maintenant</p>

        <form action="Loadingdata.php" method="post" class="form-horizontal" style="margin-left:25%; margin-right: 25%">
        <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Firstname</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Lastname</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Username</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Password</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                <div class="cols-sm-7">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="buttonregister" class="btn btn-primary btn-lg btn-block login-button" style="margin-top: 3%">Register</button>
            </div>

        </form>
    </div>
</div>

<footer>
    <?php
    include ("footer.php");
    ?>
</footer>
</body>
</html>
